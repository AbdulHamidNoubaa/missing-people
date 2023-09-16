<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Missing_pepole extends Model
{
    use HasFactory;
    protected $table = 'missing_people';
  
  protected $fillable = [
    'first_name_miss', 
    'last_name_miss',
    'birth_date',
    'disappearance_date',
    'city_miss',
    'address_street_miss',
    'phone_number_miss',
    'gender',
    'clothing',
    'distinctive_features',
    'additional_info',
    'image',
    'first_name',
    'last_name',
    'city',
    'phone_number',
    'whtas_phone_number',
    'rrmp',
    'email',
    'address_street',
    'status'
  ];
}
