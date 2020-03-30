<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class NarudzbaProizvod
 * 
 * @property int $id
 * @property int $narudzba_id
 * @property int $proizvod_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Narudzba $narudzba
 * @property Proizvod $proizvod
 *
 * @package App\Models
 */
class NarudzbaProizvod extends Model
{
	protected $table = 'narudzba_proizvod';

	protected $casts = [
		'narudzba_id' => 'int',
		'proizvod_id' => 'int'
	];

	protected $fillable = [
		'narudzba_id',
		'proizvod_id'
	];

	public function narudzba()
	{
		return $this->belongsTo(Narudzba::class);
	}

	public function proizvod()
	{
		return $this->belongsTo(Proizvod::class);
	}
}
