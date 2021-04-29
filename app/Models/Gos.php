<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gos extends Model
{
    use HasFactory;

    protected $fillable = ['gonumber', 'description', 'filelink'];
}
