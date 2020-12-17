<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    use HasFactory;
    protected $table='blogposts';
    protected $fillable=[
        'title','image','blog_description'
    ];
}
