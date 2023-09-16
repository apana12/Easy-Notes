<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bimsem extends Model
{
    use HasFactory;
    protected $table = 'bimsem';

    protected $fillable = ['first_sem','sec_sem'];
}
