<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Models\UsersHomes;

class Homes extends Model
{
    //use HasFactory;

    public $timestamps = false;

    protected $table = 'homes';

    protected $primaryKey = 'id';

    protected $fillable = ['home_name'];
}
