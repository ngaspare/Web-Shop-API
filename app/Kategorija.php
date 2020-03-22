<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Proizvod;

class Kategorija extends Model
{
    public function proizvodi()
    {
        return $this->belongsToMany(Proizvod::class);
    }
}
