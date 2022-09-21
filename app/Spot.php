<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spot extends Model
{
    protected $fillable = [
        'lat',
        'lon',
        'post_id'
    ];
    
    public function posts(){
        return $this-> hasMany('App\Post');
    }
}
