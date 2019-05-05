<?php

namespace App;

use Auth;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements Searchable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';


    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles(){
        return $this->belongsToMany('App\Role');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }

    public function agencies(){
        return $this->belongsToMany('App\Agency');
    }

    public function transactions(){
        return $this->belongsToMany('App\Transaction');
    }

    public function hasAnyRoles($roles){
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

    public function hasAnyRole($role){
        return null !== $this->roles()->where('name', $role)->first();
    }
 
    public function getSearchResult(): SearchResult
    {
        $role = strtolower(implode(', ', Auth::user()->roles()->pluck('name')->toArray()));
        $url = route($role.'.users.show', $this->id);
 
        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }
}
