<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Process extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    /**
     * Get the requisitions for the process.
     */
    public function requisitions()
    {
        return $this->hasMany(Requisition::class, 'processes_id');
    }
}
