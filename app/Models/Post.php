<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'user_id' ,
        'title' ,
        'body' ,
        'name' ,
        'path'
     ];

    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }

    public static function scopeLatest($query){
       return  $query->orderBy('id' ,'asc')->get();
    }

    public $directory = "/images/";

    public function getPathAttribute($val){
        return $this->directory . $val;
    }

//    <img src="{{$post -> path}}">


}
