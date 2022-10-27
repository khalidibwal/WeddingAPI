<?php

namespace App\Models;
use App\Models\packages;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catering extends Model
{
    use HasFactory;
    protected $table='catering';
    protected $fillable = [
        'ctr_name','wo_desc_id','users_id','ctg_id','pkg_id'
    ];
    public function package_data(){
        return $this->hasMany(packages::class,'id','pkg_id');
    }
    public function category_data(){
        return $this->hasMany(category::class,'id','ctg_id');
    }
}
