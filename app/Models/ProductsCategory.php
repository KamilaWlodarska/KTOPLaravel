<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsCategory extends Model
{
    //use HasFactory;

    public $timestamps = false;

    protected $table = 'products_category';

    protected $primaryKey = 'id';

    protected $fillable = ['pcat_name','type','home_id'];

    public function productproduct()
    {
        return $this->belongsTo('App\Models\Products','pcat_id','id');
    }
}
