<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocaleModel extends Model
{
    use HasFactory;
    
    protected $table="locale";
    protected $fillable=[
        'road',
        'village',
        'number',
        'zipcode',
        'city',
        'state',
        'country',
    ];
}
