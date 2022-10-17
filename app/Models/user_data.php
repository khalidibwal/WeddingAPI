<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_data extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = [
        'username','password','name','email','wo_desc_id'
    ];
}
