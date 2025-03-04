<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ResetPassword extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "resets_password";

    public $incrementing = false;
    protected $fillable = [
        'user_fullname',
        'username',
        'email',
        'password',
    ];
}
