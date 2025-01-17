<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreinerModel extends Model
{
    use HasFactory;
    
    protected $table="treiner";
    protected $fillable=[
        'Name',
        'Age',
        'Height',
        'Weight',
        'CPF',
        'RG',
    ];
}
