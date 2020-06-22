<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use App\Subjects;

class Courses extends Model
{
    //
    public function loadCredential()
        {
            return $this->subject->first();
            
        }

    public function subject() {
        return $this->hasOne(Subjects::class);
    }
}
