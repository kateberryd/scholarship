<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Registration\RegistrationContract;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;
use Sentinel;
use App\User;

class RegistrationController extends Controller
{
    protected $repo;

    public function __construct(RegistrationContract $registrationContract) {
        $this->repo = $registrationContract;
    }
    
    public function index()
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
		}
		else{
            $users = $this->repo->findAll();
			return view('backend.index')->with('users', $users);
		}
       
    }

    
    public function create()
    {
        //
        return view('auth.Register');
    }
    
    public function store(Request $request)
    {
        //
           
        
			$this->validate($request, [
				'first_name' => 'required',
                'last_name' => 'required',
                'date_birth' => 'required',
                'sex' => 'required',
                'marital_status' => 'required',
                'birth_country' => 'required',
                'nationality' => 'required',
                'staff_of_uwi' => 'required',
                'glomode_staff' => 'required',
                'dependent_glomode_staff' => 'required',
                'disability' => 'required',
                'address' => 'required',
                'city' => 'required',
                'program_type' => 'required',
                'country' => 'required',
                'mobile_one' => 'required',
                'username' => 'required',
                'password' => 'required',
				'email' => 'required',
	
			]);
	
			try {
				$user = $this->repo->create($request);
	
				if($user->id) {
					return redirect()->back()->with('success', "User $user->first_name $user->last_name created successfully. Please check your email to activate account");
				} else {
					return back()->withInput()->with('error', 'Could not create user. Try again!');
				}
			} catch (QueryException $e) {
				
				
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with('error', "Account for $request->first_name $request->last_name already exists!");
				}
			}
		
    }
    
    
    public function show($slug)
    {
        //
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        else{
            $user = $this->repo->findBySlug($slug);
            return view('backend.view-more')->with('user', $user);
        }
    }
    
    public function edit($id)
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{
        $user =  $this->repo->findById($id);
        if($user->credential){
            $subject_com = unserialize($user->credential->subject_combination);
        }
        else{
            $subject_com = null;  
        }
        $courses = DB::table('courses')->get();
        return view('backend.edit')->with('user', $user)->with('courses', $courses)->with('subject_com', $subject_com);
        }
    }
    
    public function update(Request $request, $slug)
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'date_birth' => 'required',
            'sex' => 'required',
            'marital_status' => 'required',
            'birth_country' => 'required',
            'nationality' => 'required',
            'staff_of_uwi' => 'required',
            'glomode_staff' => 'required',
            'dependent_glomode_staff' => 'required',
            'disability' => 'required',
            'address' => 'required',
            'city' => 'required',
            'program_type' => 'required',
            'country' => 'required',
            'mobile_one' => 'required',
            'username' => 'required',
            'email' => 'required',

        ]);


        
            $user = $this->repo->update($request, $slug);

            if($user->id) {
                return redirect()->back()->with('message', "User $user->first_name $user->last_name updated successfully.");
            } else {
                return back()->withInput()->with('error', 'Could not create user. Try again!');
            }
        }

    }
    
    public function delete($slug)
    {
        //
        if(!Sentinel::check()){
            return redirect()->route('get_login');
        }
        else{
            if ($this->repo->remove($slug)) {
            return redirect()->back()->with('success', 'User deleted successfully');
            } else {
               
            return back()->with('error', 'Error deleting user');
            }
        }    

    }
}
