<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Sentinel;

class LoginController extends Controller
{
    //


	public function getLogin() {
		return view('auth.Login');
	}

	public function getAdminLogin() {
		return view('auth.AdminLogin');
	}
	
	public function post(Request $request) {
		$this->validate($request, [
		  'email' => 'required',
		  'password' => 'required'
		]);

		$credentials = [
		  'email'    => $request->email,
		  'password' => $request->password,
		];

		// dd($credentials);
				
		try {
		  if(Sentinel::authenticate($credentials)) {
				$authUser = Sentinel::getUser();
				// dd($authUser);
				
				
				try {
				  if (Sentinel::getUser()->roles()->first()->slug === 'superadmin') {						
					return redirect()->back()->withInput()->with('error', 'Unauthorized user');
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'admin') {
					return redirect()->back()->withInput()->with('error', 'Unauthorized user');
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'author') {
						return redirect()->route('landing');
				  } elseif (Sentinel::getUser()->roles()->first()->slug === 'moderator') {			
						return redirect()->route('landing');
				  }
				} catch (\BadMethodCallException $e) {
				  return redirect()->route('get_login')->with('error', 'Your Session has expired. Please login again!');
				}
	  	} else {			
				return redirect()->back()->withInput()->with('error', 'Ops... Your Login Credentials did not match');
	  	}
		} catch(ThrottlingException $e) {
	  	$delay = $e->getDelay();
	  	return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
		} catch(NotActivatedException $e){
	  	return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
		}
  }

  public function AdminLogin(Request $request){
	$this->validate($request, [
		'email' => 'required',
		'password' => 'required'
	  ]);

	  $credentials = [
		'email'    => $request->email,
		'password' => $request->password,
	  ];

	  // dd($credentials);
			  
	  try {
		if(Sentinel::authenticate($credentials)) {
			  $authUser = Sentinel::getUser();
			  // dd($authUser);
			  
			  try {
				if (Sentinel::getUser()->roles()->first()->slug === 'superadmin') {						
					  return redirect()->route('admin.index');
				} elseif (Sentinel::getUser()->roles()->first()->slug === 'admin') {
					return redirect()->route('admin.index');
				} elseif (Sentinel::getUser()->roles()->first()->slug === 'author') {
					return redirect()->back()->withInput()->with('error', 'Unauthorized user');
				} elseif (Sentinel::getUser()->roles()->first()->slug === 'moderator') {			
					return redirect()->back()->withInput()->with('error', 'Unauthorized user');
				}
			  } catch (\BadMethodCallException $e) {
				return redirect()->route('get_login')->with('error', 'Your Session has expired. Please login again!');
			  }
		} else {			
			  return redirect()->back()->withInput()->with('error', 'Ops... Your Login Credentials did not match');
		}
	  } catch(ThrottlingException $e) {
		$delay = $e->getDelay();
		return redirect()->back()->with(['error' => "Ops.. You have been banned for $delay seconds."]);
	  } catch(NotActivatedException $e){
		return redirect()->back()->with(['error' => 'Ops... Your account is not yet activated, please check your email for activation code or link']);
	  }
  }

  public function logout() {
		if(Sentinel::getUser()->roles()->first()->slug === 'superadmin'){
			Sentinel::logout(null, true);
			return redirect()->route('get_AdminLogin');
		}

		else if(Sentinel::getUser()->roles()->first()->slug === 'admin'){
			Sentinel::logout(null, true);
			return redirect()->route('get_AdminLogin');
		}
		else if(Sentinel::getUser()->roles()->first()->slug === 'author'){
			Sentinel::logout(null, true);
			return redirect()->route('get_login');
		}
		else if(Sentinel::getUser()->roles()->first()->slug === 'moderator'){
			Sentinel::logout(null, true);
			return redirect()->route('get_login');
		}
		
  }
}
