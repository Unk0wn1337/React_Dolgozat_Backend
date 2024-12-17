<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recept extends Model
{
    /** @use HasFactory<\Database\Factories\ReceptFactory> */
    use HasFactory;

    protected $fillable = 
    [
        'nev',
        'kat_id',
        'kep_eleresi_ut',
        'leiras'
    ];

    // $table->string('nev');
    // $table->integer('kat_id');
    // $table->string('kep_eleresi_ut');
    // $table->string('leiras');
}
