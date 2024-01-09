<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    //added a fillable method to ensure that right data is added
    protected $fillable = ['title', 'price', 'description', 'type', 'sale_date', 'series', 'thumb'];
}
