<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //use HasFactory;

    public $timestamps = false;

    protected $table = 'products';

    protected $primaryKey = 'id';

    protected $fillable = ['pcat_id','purchase_date','open_date','deadline'];
}
