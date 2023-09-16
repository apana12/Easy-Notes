<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuestInteraction extends Model
{
    use HasFactory;

    protected $fillable = ['action'];

    // Add any additional methods or relationships as needed
}
