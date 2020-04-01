<?php

namespace App\Http\Controllers;

use App\Http\Requests\DodavanjeNarudzbeRequest;
use App\Http\Resources\NarudzbaResource;
use App\Repositories\NarudzbaRepositoryInterface;

class NarudzbaController extends Controller
{

    private $narudzbaRepo;

    public function __construct(NarudzbaRepositoryInterface $narudzbaRepo)
    {
        $this->narudzbaRepo = $narudzbaRepo;
    }

    public function store(DodavanjeNarudzbeRequest $request)
    {
        return $this->narudzbaRepo->store($request->all());
    }
}
