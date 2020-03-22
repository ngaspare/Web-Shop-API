<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\NarudzbaResource;
use App\Narudzba;

class NarudzbaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'ukupna_cijena' => 'required',
            'ime'           => 'required',
            'prezime'       => 'required',
            'email'         => 'required',
            'broj_telefona' => 'required',
            'adresa'        => 'required',
            'grad'          => 'required',
            'drzava'        => 'required'
        ]);

        $narudzba = Narudzba::create($request->all());
        return new NarudzbaResource($narudzba);
    }
}
