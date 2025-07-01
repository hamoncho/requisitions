<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitionApproval extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'requisition_id',
        'approver_id',
        'order',
        'status',
        'comments',
    ];

    /**
     * Get the requisition that owns the approval.
     */
    public function requisition()
    {
        return $this->belongsTo(Requisition::class);
    }

    /**
     * Get the approver that owns the approval.
     */
    public function approver()
    {
        return $this->belongsTo(User::class, 'approver_id');
    }
}
