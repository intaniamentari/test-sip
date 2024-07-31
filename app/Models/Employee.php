<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'employees';

    protected $fillable = [
        'first_name',
        'last_name',
        'date_of_birth',
        'phone_number',
        'email_address',
        'province_id',
        'city_id',
        'street_address',
        'zip_code',
        'ktp_number',
        'position_id',
        'bank_id',
        'bank_account_number'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function city()
    {
        return $this->belongsTo(Regency::class, 'city_id');
    }
}
