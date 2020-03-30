<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Narudzba
 * 
 * @property int $id
 * @property float $ukupna_cijena
 * @property string $ime
 * @property string $prezime
 * @property string $email
 * @property int $broj_telefona
 * @property string $adresa
 * @property string $grad
 * @property string $drzava
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Proizvod[] $proizvods
 *
 * @package App\Models
 */
class Narudzba extends Model
{
	protected $table = 'narudzbas';

	protected $casts = [
		'ukupna_cijena' => 'float',
		'broj_telefona' => 'int'
	];

	protected $fillable = [
		'ukupna_cijena',
		'ime',
		'prezime',
		'email',
		'broj_telefona',
		'adresa',
		'grad',
		'drzava'
	];

	public function proizvods()
	{
		return $this->belongsToMany(Proizvod::class)
					->withPivot('id')
					->withTimestamps();
	}
}
