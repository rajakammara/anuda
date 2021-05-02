<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovedLayout extends Model
{
    use HasFactory;

    protected $fillable = ['village', 'surveyno', 'extent', 'flpno', 'proceedings', 'drawings', 'mortgageplotnos'];
}
