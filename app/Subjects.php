<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    //

    public function course() {
        return $this->hasOne(App\Courses::class);
    }
}
