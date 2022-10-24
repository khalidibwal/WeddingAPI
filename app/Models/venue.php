<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venue extends Model
{
    use HasFactory;
    protected $table = 'venue';
    protected $fillable=['location','building_name','users_id','wo_desc_id','price'];
}
