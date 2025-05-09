<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GeneralBudgetItem extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function budgetItems(): HasMany
    {
        return $this->hasMany(BudgetItem::class);
    }
}
