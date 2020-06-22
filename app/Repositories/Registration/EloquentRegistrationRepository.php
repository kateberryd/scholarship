<?php

namespace App\Repositories\Registration;
use App\Repositories\Registration\RegistrationContract;
use Sentinel;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Activation;
use App\User;

class EloquentRegistrationRepository implements RegistrationContract {
    //
    public function create($request){
      $name_slug = preg_replace('/\s+/', '-', $request->first_name. ' '. $request->last_name);
    $name = explode(" ", $request->full_name);
      
    $credentials = [
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'middle_name' => $request->middle_name,
      'date_birth' => $request->date_birth,
      'sex' => $request->sex,
      'marital_status' => $request->marital_status,
      'country_of_birth' => $request->birth_country,
      'nationality' => $request->nationality,
      'uwi_staff_member' => $request->staff_of_uwi,
      'dependant_uwi_staff' => $request->dependent_of_uwi,
      'glomode_staff_member' => $request->glomode_staff,
      'dependant_glomode_staff' => $request->dependent_glomode_staff,
      'disability' => $request->disability,
      'address' => $request->address,
      'city' => $request->city,
      'program_type' => $request->program_type,
      'country' => $request->country,
      'mobile_one' => $request->mobile_one,
      'mobile_two' => $request->mobile_two,
      'email'    => $request->email,
      'username'    => $request->username,
      'password' => bcrypt($request->password),
      'user_role' => 'author',
      'slug' => strtolower($name_slug),
    ];

    

    $userRole = 'author';

    

    $user = User::create($credentials);
    $activation = Activation::create($user);
    $role = Sentinel::findRoleBySlug($userRole);
    $role->users()->attach($user);
    // return $user;
    $thisUser = [
      'user' => $user,
      'code' => $activation->code
    ];


    $this->sendEmail($thisUser);
    return $user;

    }

    public function sendEmail($thisUser){
      Mail::to($thisUser['user']->email)->send(new sendMailable($thisUser));
    }

   
      // return all Roles
      public function findAll() {
        $users = User::all();
        return $users;
       
      }
    
      // return a User by ID
      public function findById($id) {
        $user= User::find($id);
        $user->credential;
        return $user;
      }
    
      // return a User by slug
      public function findBySlug($slug){
        $user = User::where('slug', $slug)->first();
        $user->credential;
        return $user;
        
      }
    
      // Update a User
      public function update($request, $slug) {
      $name_slug = preg_replace('/\s+/', '-', $request->first_name. ' '. $request->last_name);
      $name = explode(" ", $request->full_name);
       $user = $this->findBySlug($slug);
      
       $user->first_name = $request->first_name;
       $user->last_name = $request->last_name;
       $user->middle_name = $request->middle_name;
       $user->date_birth = $request->date_birth;
       $user->sex = $request->sex;
       $user->marital_status = $request->marital_status;
       $user->country_of_birth = $request->country_of_birth;
       $user->nationality = $request->nationality;
       $user->uwi_staff_member = $request->staff_of_uwi;
       $user->dependant_uwi_staff = $request->dependent_of_uwi;
       $user->glomode_staff_member = $request->glomode_staff;
       $user->dependant_glomode_staff = $request->dependent_glomode_staff;
       $user->disability = $request->disability;
       $user->address = $request->address;
       $user->city = $request->city;
       $user->program_type = $request->program_type;
       $user->country = $request->country;
       $user->mobile_one = $request->mobile_one;
       $user->mobile_two = $request->mobile_two;
       $user->email = $request->email;
       $user->username = $request->username;
       $user->slug = strtolower($name_slug);
       $user->user_role = 'author';
       
      $userRole = 'author';
      // $role = Sentinel::findRoleBySlug($userRole);
      // $role->users()->attach($user);
      
     
      $user->save();
      return $user;
      }
    
      // Remove a User
      public function remove($slug) {
        $user = $this->findBySlug($slug);
        return $user->delete();
      }
}
