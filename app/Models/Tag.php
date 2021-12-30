<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static find(int $int)
 */
class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function tags(){
        return $this->morphToMany('App\Models\Tag', 'taggable');
    }
}
