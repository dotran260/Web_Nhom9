<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'tbl_category'; //tên table

    // turn off both 
    public $timestamps = false;

    // turn off only updated_at
    const UPDATED_AT = false;

    protected $primaryKey = 'category_id'; //Khóa chính 

    protected $fillable = [
        'category_name',
        'category_desc',
        'category_value',
        'keywords',
    ]; //Cột SQL
}
