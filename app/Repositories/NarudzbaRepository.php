<?php

namespace App\Repositories;   

use App\Repositories\NarudzbaRepositoryInterface; 
use App\Models\Narudzba; 
use App\Models\NarudzbaProizvod;
use App\Models\Proizvod; 

class NarudzbaRepository implements NarudzbaRepositoryInterface
{
    protected $model;
    protected $proizvodi;
    protected $cijena;
    protected $proizvods;
    protected $proizvodCijena;

    public function __construct(Narudzba $model, Proizvod $proizvods)     
    {         
        $this->model = $model;
        $this->proizvods = $proizvods;
    }

    public function store($attributes)
    {
        foreach (explode(",", $attributes['proizvodi']) as $proizvod)
        {
            $this->proizvodCijena = $this->proizvods->where('id', $proizvod)->firstOrFail();
            $this->cijena += $this->proizvodCijena->cijena;
        }
        
        $this->model->ukupna_cijena =   $this->cijena;
        $this->model->ime =             $attributes['ime'];
        $this->model->prezime =         $attributes['prezime'];
        $this->model->email =           $attributes['email'];
        $this->model->broj_telefona =   $attributes['broj_telefona'];
        $this->model->adresa =          $attributes['adresa'];
        $this->model->grad =            $attributes['grad'];
        $this->model->drzava =          $attributes['drzava'];
        $this->model->save();

        foreach (explode(",", $attributes['proizvodi']) as $proizvod)
        {
            $proizvodi = [
                'narudzba_id' => $this->model->id,
                'proizvod_id' => $proizvod
            ];
            NarudzbaProizvod::insert($proizvodi);
        }

        return $this->model;
    }
}