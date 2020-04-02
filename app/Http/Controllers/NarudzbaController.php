<?php

namespace App\Http\Controllers;

use App\Http\Requests\DodavanjeNarudzbeRequest;
use App\Http\Resources\NarudzbaResource;
use App\Repositories\NarudzbaRepositoryInterface;

class NarudzbaController extends Controller
{

    private $narudzbaRepo;
    private $narudzba;

    public function __construct(NarudzbaRepositoryInterface $narudzbaRepo)
    {
        $this->narudzbaRepo = $narudzbaRepo;
    }

    public function store(DodavanjeNarudzbeRequest $request)
    {
        $narudzba = $this->narudzbaRepo->store($request->all());

        return $narudzba->with('proizvods')->whereHas('proizvods', function ($query) use($narudzba){
            $query->where('narudzba_id', '=', $narudzba->id);
        })->firstOrFail();
    }
}
