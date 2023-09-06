<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentform extends Model
{
    use HasFactory;
    protected $fillable =['name','email','phn_no','address','faculty','semester'];
}
