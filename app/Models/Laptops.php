<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptops extends Model
{
    use HasFactory;

    protected $table = 'laptops';


    public $timestamps = false;
    
    protected $fillable = [
        'name',
        'manufacturer',
        'os',
        'ram',
        'type',
        'date',
    ];
}
