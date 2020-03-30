<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class KategorijaProizvod
 * 
 * @property int $id
 * @property int $kategorija_id
 * @property int $proizvod_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Kategorija $kategorija
 * @property Proizvod $proizvod
 *
 * @package App\Models
 */
class KategorijaProizvod extends Model
{
	protected $table = 'kategorija_proizvod';

	protected $casts = [
		'kategorija_id' => 'int',
		'proizvod_id' => 'int'
	];

	protected $fillable = [
		'kategorija_id',
		'proizvod_id'
	];

	public function kategorija()
	{
		return $this->belongsTo(Kategorija::class);
	}

	public function proizvod()
	{
		return $this->belongsTo(Proizvod::class);
	}
}
