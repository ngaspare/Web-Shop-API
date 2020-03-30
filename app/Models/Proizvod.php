<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proizvod
 * 
 * @property int $id
 * @property string $naziv
 * @property string $opis
 * @property float $cijena
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Kategorija[] $kategorijas
 * @property Collection|Narudzba[] $narudzbas
 *
 * @package App\Models
 */
class Proizvod extends Model
{
	protected $table = 'proizvods';

	protected $casts = [
		'cijena' => 'float'
	];

	protected $fillable = [
		'naziv',
		'opis',
		'cijena'
	];

	public function kategorijas()
	{
		return $this->belongsToMany(Kategorija::class)
					->withPivot('id')
					->withTimestamps();
	}

	public function narudzbas()
	{
		return $this->belongsToMany(Narudzba::class)
					->withPivot('id')
					->withTimestamps();
	}
}
