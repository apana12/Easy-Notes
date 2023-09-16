<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bcasem extends Model
{
    use HasFactory;
    protected $table = 'bcasem';

    protected $fillable = ['first_sem','sec_sem'];
}
