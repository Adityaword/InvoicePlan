<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\ClientController;

class Clients extends Model
{
    protected $table='client';
    protected $fillable=['name','gender','email','contact','address','updated_at','created_at'];
}
