<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Two extends Model
{
    use HasFactory;
    protected $fillable=['name','email','address','class','number','section'];
}
