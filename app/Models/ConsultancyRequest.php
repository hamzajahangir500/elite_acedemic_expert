<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultancyRequest extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'message'];
}