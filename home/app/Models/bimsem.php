<?php

namespace App\Models;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bimsem extends Model
{
    use HasFactory;
    protected $table = 'bimsem';

    protected $fillable = ['first_sem','sec_sem'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
