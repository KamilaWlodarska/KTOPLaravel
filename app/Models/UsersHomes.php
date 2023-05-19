<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersHomes extends Model
{
    //use HasFactory;

    public $timestamps = false;

    protected $table = 'users_homes';

    protected $primaryKey = 'id';

    protected $fillable = ['user_id','home_id'];

    public function useruser()
    {
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
