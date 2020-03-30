<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ProizvodResource;
use App\Models\Proizvod;

class ProizvodController extends Controller
{
    public function index() : ProizvodResource
    {
        return new ProizvodResource(Proizvod::paginate());
    }

    public function show(Proizvod $proizvod) : ProizvodResource
    {
        return new ProizvodResource($proizvod);
    }
}
