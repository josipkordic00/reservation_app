<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidencija extends Model
{
    use HasFactory;

    protected $table = 'evidencije';

    protected $fillable = [
        'datum', 'nastavnik_id', 'ucenici', 'ucionica_id', 'ucionica_broj',
        'ustanova_id'
    ];
}