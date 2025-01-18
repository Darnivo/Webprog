<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable, Notifiable;

    protected $fillable = ['username', 'password'];
    protected $casts = [
        'balance' => 'integer',
        'points' => 'integer',
    ];
    
    public function purchases()
    {
        return $this->hasMany(Purchases::class, 'customer_id');
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = $value;
    }
}