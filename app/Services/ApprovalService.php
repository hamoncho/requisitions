<?php

namespace App\Services;

use App\Models\Requisition;
use App\Models\User;

class ApprovalService
{
    public function startApprovalProcess(Requisition $requisition)
    {
        $currentUser = $requisition->user;
        $approvers = $this->getApprovers($currentUser);

        if (empty($approvers)) {
            $requisition->update(['status' => 'approved']);
            return;
        }

        foreach ($approvers as $index => $approver) {
            $requisition->approvals()->create([
                'approver_id' => $approver->id,
                'order' => $index + 1,
            ]);
        }

        $this->updateRequisitionStatus($requisition);
    }

    public function approve(Requisition $requisition, User $approver, string $comments = null)
    {
        $approval = $this->getApproval($requisition, $approver);

        if (!$approval || $approval->status !== 'pending') {
            return; // Or throw an exception
        }

        $approval->update([
            'status' => 'approved',
            'comments' => $comments,
        ]);

        $this->updateRequisitionStatus($requisition);
    }

    public function reject(Requisition $requisition, User $approver, string $comments = null)
    {
        $approval = $this->getApproval($requisition, $approver);

        if (!$approval || $approval->status !== 'pending') {
            return; // Or throw an exception
        }

        $approval->update([
            'status' => 'rejected',
            'comments' => $comments,
        ]);

        $requisition->update([
            'status' => 'rejected',
            'current_approver_id' => null,
        ]);
    }

    protected function getApprovers(User $user)
    {
        $approvers = [];
        $current = $user;

        while ($current->supervisor) {
            $approvers[] = $current->supervisor;
            $current = $current->supervisor;
        }

        return $approvers;
    }

    protected function getApproval(Requisition $requisition, User $approver)
    {
        return $requisition->approvals()->where('approver_id', $approver->id)->first();
    }

    protected function updateRequisitionStatus(Requisition $requisition)
    {
        $nextApproval = $requisition->approvals()->where('status', 'pending')->orderBy('order')->first();

        if ($nextApproval) {
            $requisition->update([
                'status' => 'pending_approval',
                'current_approver_id' => $nextApproval->approver_id,
            ]);
        } else {
            $requisition->update([
                'status' => 'approved',
                'current_approver_id' => null,
            ]);
        }
    }
}
