<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ucenik extends Model
{
    use HasFactory;

    protected $table = 'ucenici';

    protected $fillable = [
        'email', 'ime', 'prezime', 'sifra', 'broj_telefona',
        'prisutnost'
    ];
}