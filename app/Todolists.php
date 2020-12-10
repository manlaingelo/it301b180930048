<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolists extends Model
{
    protected $table = "todolists";
    protected $fillable = ['title','status'];
}
