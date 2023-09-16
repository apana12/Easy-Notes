<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bscsem extends Model
{
    use HasFactory;
    protected $table = 'bscsem';

    protected $fillable = ['first_sem','sec_sem'];
}
