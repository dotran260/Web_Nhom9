<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'tbl_brand'; //tên table

    // turn off both 
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;

    protected $primaryKey = 'brand_id'; //Khóa chính 

    protected $fillable = [
        'brand_name',
        'brand_desc',
        'brand_value',
        'keywords',
    ]; //Cột SQL

    // public function products(){
    //     return $this->belongsTo('App\Product','brand_id'); //1 sp có 1 thương hiệu
    // }
}
