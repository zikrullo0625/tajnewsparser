<?php
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class GymUser extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'password', 'class',
    ];

    protected $hidden = [
        'password'
    ];
}

