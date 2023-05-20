<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obavijesti extends Model
{
    use HasFactory;

    protected $table = 'obavijesti';

    protected $fillable = [
        'text', 'nastavnik_id'
    ];
}