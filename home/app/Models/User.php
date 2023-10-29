<?php

namespace App\Models;
use App\Models\Feedback;
use App\Models\bimsem;
use App\Models\bcasem;
use App\Models\bscsem;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'avatar',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
    public function bimsem()
    {
        return $this->hasMany(bimsem::class);
    }
    public function bscsem()
    {
        return $this->hasMany(bscsem::class);
    }
    public function bcasem()
    {
        return $this->hasMany(bcasem::class);
    }
}
