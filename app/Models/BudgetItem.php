<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BudgetItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function generalBudgetItem(): BelongsTo
    {
        return $this->belongsTo(GeneralBudgetItem::class);
    }

    /**
     * Get the requisition items for the budget item.
     */
    public function requisitionItems()
    {
        return $this->hasMany(RequisitionItem::class);
    }
}
