<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Address;
use App\Models\Post;
use App\Models\Role;

/**
 * @method static findOrFail(int $int)
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Address(){
        return $this->hasOne(Address::class);
    }

    public function Posts(){
        return $this->hasMany(Post::class ,'user_id', 'id' );
    }

    public function Roles(){
        return $this->belongsToMany(Role::class );
    }

    public function getNameAttribute($val){
     return strtoupper($val);
    }

    public function setNameAttribute($val){
        $this->attributes['name']= strtoupper($val);
     }

     public function isAdmin(){
        if($this->role ->name = 'administrator'){
            return true;
        }
        return false;
     }
}
