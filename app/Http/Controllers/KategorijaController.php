<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proizvod;
use App\Kategorija;

class KategorijaController extends Controller
{
    public function show($id)
    {

            return Proizvod::whereHas('kategorije', function ($query) use ($id) {
                $query->where('kategorija_id', '=', $id);
            })->paginate();
    }
}
