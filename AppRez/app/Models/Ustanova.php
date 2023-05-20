<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ustanova extends Model
{
    use HasFactory;

    protected $table = 'ustanove';

    protected $fillable = [
        'naziv', 'adresa'
    ];
}