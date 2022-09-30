<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $attributes = [
        'good' => 0,
    ];
    
    protected $fillable = [
        'sake_name',
        'body',
        'category_id',
        'image',
        'image_path',
        'user_id',
        'sellstore'
    ];
    
    public function Category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function spot()
    {
        return $this->belongsTo('App\Spot');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
