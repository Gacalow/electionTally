<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionPosition extends Model
{
    use HasFactory;

    protected $fillable = [
        'election_id',
        'position_id',
        'constituency_id',
        'ward_id',
        'county_id',
        'is_active',
    ];

    protected $cast = [
        'is_active' => 'boolean',
    ];
}
