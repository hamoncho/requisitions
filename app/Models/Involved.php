<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Involved extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function objectives(): BelongsToMany
    {
        return $this->belongsToMany(Objective::class);
    }
}
