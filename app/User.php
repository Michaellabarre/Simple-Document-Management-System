<?php
namespace App;
use DateTime;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Role', 'user_role', 'user_id', 'role_id');
    }
    
    public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRole($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRole($roles)) {
                return true;
            }
        }
        return false;
    }
    
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function isAdmin() 
    {    
        return $this->roles()->where('role_id', 1)->first();
    }

    public function isAccountingstaff() 
    {    
        return $this->roles()->where('role_id', 2)->first();
    }

    public function getCreatedAtAttribute($value)
    {
        $createDate = new DateTime($value);
        $strip = $createDate->format('Y-m-d');
        return $strip;
    }      
}


