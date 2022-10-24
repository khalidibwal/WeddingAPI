<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packages extends Model
{
    use HasFactory;
    protected $table = 'packages';
    protected $fillable=[
        'pkg_name','price'
    ];
}
