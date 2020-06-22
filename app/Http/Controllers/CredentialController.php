<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Credential\CredentialContract;
use App\User;
use Sentinel;
use App\Credential;
use Illuminate\Support\Facades\DB;

class CredentialController extends Controller
{
    protected $repo;

    public function __construct(CredentialContract $credentialContract) {
        $this->repo = $credentialContract;
    }
    
    public function index()
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{
        $user = Credential::where('user_id', Sentinel::getUser()->id)->first();
        $courses = DB::table('courses')->get();
        return view('backend.user')->with('courses', $courses)->with('user', $user);
        }
    }


    public function undergraduate()
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{
        $user = Credential::where('user_id', Sentinel::getUser()->id)->first();
        $courses = DB::table('courses')->get();
        return view('backend.undergraduate')->with('courses', $courses)->with('user', $user);
        }
    }



    public function AllCredentials()
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{
        $credentials = $this->repo->findAll();
        return view('backend.credentials')->with('credentials', $credentials);
        }
    }

    public function print($id){
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{
        $user = User::find($id);
        $user->credential;
        return view('backend.print-user')->with('user', $user);
    }
}
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //

        if(!Sentinel::check()) {
			return redirect()->route('get_login');
		}else{

			$this->validate($request, [
				'school_name' => 'required',
				'school_address' => 'required',
                'school_state' => 'required',
                'expected_date_of_graduation' => 'required',
                'exam_year' => 'required',
                'type_of_result' => 'required',
                'state_exam' => 'required',
                'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	
			]);
	
			try {
				$user = $this->repo->create($request);
	
				$notification = array(
					'message' => "Uploading credentials was successfully",
					'alert-type' => 'success'
				);		
	
				if($user->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not complete registration. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "Account  already exists!",
					'alert-type' => 'error'
				);
	
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
        }
    }


    public function storeundergraduate(Request $request)
    {
        //

        if(!Sentinel::check()) {
			return redirect()->route('get_login');
		}else{

			$this->validate($request, [
				'school_name' => 'required',
				'school_address' => 'required',
                'school_state' => 'required',
                'expected_date_of_graduation' => 'required',
                'program_of_study' => 'required',
                'present_level' => 'required',
                'enrolment_status' => 'required',
                'present_cgpa' => 'required',
                'courses' => 'required',
                'state_exam' => 'required',
                'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
	
            ]);
            
       
	
			try {
				$user = $this->repo->create($request);
	
				$notification = array(
					'message' => "Uploading credentials was successfully",
					'alert-type' => 'success'
				);		
	
				if($user->id) {
					return redirect()->back()->with($notification);
				} else {
					return back()->withInput()->with('error', 'Could not complete registration. Try again!');
				}
			} catch (QueryException $e) {
				
				$error = array(
					'message' => "Account  already exists!",
					'alert-type' => 'error'
				);
	
				$errorCode = $e->errorInfo[1];
				if($errorCode == 1062){
					return redirect()->back()->withInput()->with($error);
				}
			}
        }
    }

    
    
    public function show($id)
    {
        //
    }

    public function payment(Request $request){
        $user = Credential::where('user_id', $request->id)->first();
        $user->payment_status = "paid";
        $user->save();
        return 12567892;
    }
    
    
    public function edit($id)
    {
        //
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
        }
        else{
        $user =  $this->repo->findById($id);
        $courses = DB::table('courses')->get();
        return view('backend.edit')->with('user', $user)->with('courses', $courses);
        }
    }
    
    public function update(Request $request, $id)
    {
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
		}else {
        $this->validate($request, [
            'school_name' => 'required',
            'school_address' => 'required',
            'school_state' => 'required',
            'expected_date_of_graduation' => 'required',
            'exam_year' => 'required',
            'type_of_result' => 'required',
            'state_exam' => 'required',
            'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
      

            $user = $this->repo->update($request, $id);

            $notification = array(
                'message' => "Credentials updated successfully",
                'alert-type' => 'success'
            );		

            if($user->id) {
                return redirect()->back()->with($notification);
            } else {
                return back()->withInput()->with('error', 'Could not complete registration. Try again!');
            }
        }
        
    }
    
    public function updateundergraduate(Request $request, $id)
    {
        if(!Sentinel::check()) {
			return redirect()->route('get_login');
		}else {
        $this->validate($request, [
            'school_name' => 'required',
				'school_address' => 'required',
                'school_state' => 'required',
                'expected_date_of_graduation' => 'required',
                'program_of_study' => 'required',
                'present_level' => 'required',
                'enrolment_status' => 'required',
                'present_cgpa' => 'required',
                'courses' => 'required',
                'state_exam' => 'required',
                'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


            $user = $this->repo->update($request, $id);

            $notification = array(
                'message' => "Credentials  updated successfully",
                'alert-type' => 'success'
            );		

            if($user->id) {
                return redirect()->back()->with($notification);
            } else {
                return back()->withInput()->with('error', 'Could not complete registration. Try again!');
            }
        }
        
    }
    
    public function delete($id)
    {
        //
    }
}
