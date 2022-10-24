<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catering extends Model
{
    use HasFactory;
    protected $table='catering';
    protected $fillable = [
        'ctr_name','wo_desc_id','users_id','ctg_id','pkg_id'
    ];
}
