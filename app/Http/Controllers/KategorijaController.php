<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proizvod;
use App\Models\Kategorija;

class KategorijaController extends Controller
{
    public function show($id)
    {

            return Proizvod::whereHas('kategorijas', function ($query) use ($id) {
                $query->where('kategorija_id', '=', $id);
            })->paginate();
    }
}
