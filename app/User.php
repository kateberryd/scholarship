<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Notifications\Notifiable;
use Sentinel;
use App\Credential;
class User extends EloquentUser
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
         'last_name', 
         'middle_name',
         'sex',
         'marital_status',
         'country_of_birth',
         'nationality',
         'uwi_staff_member',
         'dependant_uwi_staff',
         'glomode_staff_member',
         'dependant_glomode_staff',
         'disability',
         'address',
         'city',
         'country',
         'mobile_one',
         'mobile_two',
         'username',
         'slug',
         'user_role',
         'email',
          'password', 
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

     public function loadCredential()
        {
            return $this->credential->first();
            
        }

    public function credential() {
        return $this->hasOne(Credential::class);
    }

  
}
