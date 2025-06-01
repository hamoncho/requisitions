<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Objective extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function involveds(): BelongsToMany
    {
        return $this->belongsToMany(Involved::class);
    }

    public function actions(): HasMany
    {
        return $this->hasMany(Action::class);
    }
}
