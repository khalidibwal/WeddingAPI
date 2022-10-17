<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wedding extends Model
{
    use HasFactory;

    protected $table = 'wo_desc';
    protected $fillable = [
        'wo_name','detail'
    ];
}
