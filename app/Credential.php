<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Credential extends Model
{
    //

   
    public function loadUser()
    {
        return $this->user->first();
        
    }

    public function user() {
        return $this->hasOne(User::class);
    }

}
