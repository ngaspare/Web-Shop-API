<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Kategorija
 * 
 * @property int $id
 * @property string $naziv
 * @property string $opis
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Proizvod[] $proizvods
 *
 * @package App\Models
 */
class Kategorija extends Model
{
	protected $table = 'kategorijas';

	protected $fillable = [
		'naziv',
		'opis'
	];

	public function proizvods()
	{
		return $this->belongsToMany(Proizvod::class)
					->withPivot('id')
					->withTimestamps();
	}
}
