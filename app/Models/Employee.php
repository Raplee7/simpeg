<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\Religion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['created_at', 'tgllahir'];


}
