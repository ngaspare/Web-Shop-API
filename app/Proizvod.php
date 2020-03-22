<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategorija;

class Proizvod extends Model
{
    public function kategorije()
    {
        return $this->belongsToMany(Kategorija::class);
    }
}
