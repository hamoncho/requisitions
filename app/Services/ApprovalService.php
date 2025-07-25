<?php

namespace App\Services;

use App\Mail\RequestApproval;
use App\Models\Requisition;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class ApprovalService
{
    public function startApprovalProcess(Requisition $requisition)
    {
        $currentUser = $requisition->user;
        $approvers = $this->getApprovers($currentUser);

        //dd($approvers);
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
        $supervisor = $user->supervisor;
        $planning = User::where('role', 'planning')->first();
        $accountant = User::where('role', 'accountant')->first();
        $approvers = [$supervisor, $accountant, $planning];
        return $approvers;
    }

    protected function getApproval(Requisition $requisition, User $approver)
    {
        return $requisition->approvals()->where('approver_id', $approver->id)->where('status','pending')->first();
    }

    protected function updateRequisitionStatus(Requisition $requisition)
    {
        $nextApproval = $requisition->approvals()->where('status', 'pending')->orderBy('order')->first();

        if ($nextApproval) {
            $requisition->update([
                'status' => 'pending_approval',
                'current_approver_id' => $nextApproval->approver_id,
            ]);
            Mail::to($requisition->currentApprover->email)->send(new RequestApproval($requisition, $requisition->currentApprover));
        } else {
            $requisition->update([
                'status' => 'approved',
                'current_approver_id' => null,
            ]);
        }
    }
}
