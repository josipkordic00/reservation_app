<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nastavnik extends Model
{
    use HasFactory;

    protected $table = 'nastavnici';

    protected $fillable = [
        'email', 'ime', 'prezime', 'sifra', 'broj_telefona',
        'qr_code_path'
    ];
}