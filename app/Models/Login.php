<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table = 'profile';

    protected $fillable = [
        'email',
        'password',
    ];
    
    protected $hidden = [
        'password',
    ];
    public function getAuthPassword() {
        return $this->password;
    }
}
