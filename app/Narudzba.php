<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Narudzba extends Model
{
    protected $fillable = [
        'ukupna_cijena',
        'ime',
        'prezime',
        'email',
        'broj_telefona',
        'adresa',
        'grad',
        'drzava'
    ];
}
