<?php

namespace App\Repositories;   

use App\Repositories\NarudzbaRepositoryInterface; 
use App\Models\Narudzba; 

class NarudzbaRepository implements NarudzbaRepositoryInterface
{
    protected $model;

    public function __construct(Narudzba $model)     
    {         
        $this->model = $model;
    }

    public function store($attributes)
    {
        return $this->model->create($attributes);
    }
}