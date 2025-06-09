<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Action extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function objective(): BelongsTo
    {
        return $this->belongsTo(Objective::class);
    }

    public function goal(): HasOne
    {
        return $this->hasOne(Goal::class);
    }
}
