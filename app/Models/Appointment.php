<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
	protected $fillable = ['user_id', 'pet_id', 'service', 'appointment_date', 'appointment_time', 'notes', 'status'];

	protected function casts(): array
	{
		return [
			'appointment_date' => 'date',
			'appointment_time' => 'datetime:H:i',
		];
	}

	public function user()
	{
    		return $this->belongsTo(User::class);
	}

	public function pet()
	{
    		return $this->belongsTo(Pet::class);
	}
}
