<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Objective extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function involveds():BelongsToMany
    {
        return $this->belongsToMany(Involved::class);
    }
}
