<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function action(): BelongsTo
    {
        return $this->belongsTo(Action::class);
    }

    public function indicators(): HasMany
    {
        return $this->hasMany(Indicator::class);
    }

    public function processess(): BelongsToMany
    {
        return $this->belongsToMany(Process::class);
    }
}
