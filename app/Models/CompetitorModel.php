<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitorModel extends Model
{
    use HasFactory;

    protected $table="competitor";
    protected $fillable=[
        'Name',
        'Age',
        'Height',
        'Weight',
        'Sex',
        'CPF',
        'RG',
        'Team',
    ];
}
