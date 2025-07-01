<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequisitionItem extends Model
{
    protected $guarded = [];
    use HasFactory;

    /**
     * Get the requisition that owns the item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function requisition()
    {
        return $this->belongsTo(Requisition::class, 'requisitions_id');
    }

    /**
     * Get the budget item that owns the requisition item.
     */
    public function budgetItem()
    {
        return $this->belongsTo(BudgetItem::class);
    }
}
