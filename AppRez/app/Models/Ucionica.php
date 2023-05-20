<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucionica extends Model
{
    use HasFactory;

    protected $table = 'ucionice';

    protected $fillable = [
        'ustanova_id', 'nastavnik_id', 'broj',
        'zauzeto', 'datum_rezervacije'
    ];
}