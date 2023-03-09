<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name','email','address','class','number','section','gender','dob','fathername','mothername','addmissiondate','religion'];
}
?>