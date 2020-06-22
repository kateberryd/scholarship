

@extends('layouts.main')
@section('users')
  <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/users">Home</a></li>
              <li class="breadcrumb-item active">GloMode</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     
    <div class="card " >
    
    <div class="card-body register-card-body col-md-9 offset-md-1">
    <div class="row">
          @if(session('error'))
          <div class="alert alert-danger alert-dismissable col-md-12"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session('error') }}
          </div>
          @endif

          @if(session('message'))
          <div class="alert alert-success alert-dismissable col-md-12"> 
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ session('message') }}
          </div>
          @endif 

        @if($errors->has('passport'))
        <div class="alert alert-danger alert-dissmissable col-md-12">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          {{ $errors->first('passport') }}
        </div>
        @endif
      </div>

      <div class="sub-heading mt-5">
        <h5 class="text-success">Personal Details</h5>
      </div>

     <form action="{{route('user.update', $user->slug)}}" method="post" class="mt-5">
        @csrf
        <div class="row">
        <div class=" mb-3 col-md-4">
          <label for="">First Name</label>
          <input type="text" class="form-control" placeholder="First name" value="{{$user->first_name}}" name="first_name">
          <small class="text-danger">{{$errors->first('first_name')}}</small>
        </div>

        <div class=" mb-3 col-md-4">
          <label for="">Last Name</label>
          <input type="text" class="form-control" placeholder="last name"  value="{{$user->last_name}}" name="last_name">
          <small class="text-danger">{{$errors->first('last_name')}}</small>
        </div>

        <div class=" mb-3 col-md-4">
          <label for="">Middle Name</label>
          <input type="text" class="form-control" placeholder="Middle name" name="middle_name"  value="{{$user->middle_name}}">
          <small >Optional</small>
         </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-4">
            <label>Date of birth</label>
            <input type="date" class="form-control" placeholder="Date of Birth"  value="{{$user->date_birth}}" name="date_birth">
            <small class="text-danger">{{$errors->first('date_birth')}}</small>
            </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Gender</label>
                  <select class="form-control select2bs4" style="width: 100%;"  name="sex">
                    <option selected="selected">{{$user->sex}}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  <small class="text-danger">{{$errors->first('sex')}}</small>
                </div> 
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Marital Status</label>
                  <select class="form-control select2bs4" style="width: 100%;"  name="marital_status">
                    <option selected="selected"> {{$user->marital_status}}</option>
                    <option>Single</option>
                    <option>Married</option>
                  </select>
                  <small class="text-danger">{{$errors->first('marital_status')}}</small>
                </div>
            </div>
        </div>
       <div class="row">
       <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Country of Birth</label>
                  <select class="form-control select2bs4" id="country6" style="width: 100%;"  name="birth_country">
                    <option selected="selected">{{$user->birth_country}}</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                  </select>
                  <small class="text-danger">{{$errors->first('birth_country')}}</small>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Nationality</label>
                  <select class="form-control select2bs4" id="country5" style="width: 100%;" name="nationality">
                    <option selected="selected">{{$user->nationality}}</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Ghana">Ghana</option>
                  </select>
                  <small class="text-danger">{{$errors->first('nationality')}}</small>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a UWI staff</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="staff_of_uwi">
                    <option selected="selected">{{$user->uwi_staff_member}}</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('uwi_staff_member')}}</small>
                </div>
            </div>
       </div>

       <div class="row">
       <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a UWI dependent</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="dependent_of_uwi">
                    <option selected="selected">{{$user->dependant_uwi_staff}}</option>
                    <option value="yes">Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('dependant_uwi_staff')}}</small>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a GLOMODE staff</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="glomode_staff">
                    <option selected="selected">{{$user->glomode_staff_member}}</option>
                    <option value="yes" >Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('glomode_staff_member')}}</small>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a GLMD dependent </label>
                  <select class="form-control select2bs4" style="width: 100%;" name="dependent_glomode_staff">
                    <option selected="selected">{{$user->dependant_glomode_staff}}</option>
                    <option value="yes">Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('dependant_glomode_staff')}}</small>
                </div>
            </div>
       </div>
       <div class="row">
       <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Disability</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="disability">
                    <option selected="selected">{{$user->disability}}</option>
                    <option value="yes">Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('disability')}}</small>
                </div>
            </div>

            <div class=" mb-3 col-md-4">
              <label for="">Phone No1.</label>
            <input type="text" class="form-control" placeholder="Mobile One" value="{{$user->mobile_one}}" name="mobile_one">
            <small class="text-danger">{{$errors->first('mobile_one')}}</small>
            </div>

        <div class=" mb-3 col-md-4">
          <label for="">Phone No2.</label>
          <input type="text" class="form-control" placeholder="Mobile Two" value="{{$user->mobile_two}}" name="mobile_two">
          <small class="ml-3">Optional</small>
        </div>

       </div>
        <div class="row">
          
        <div class="mb-3 col-md-6">
          <label for="">Email Address</label>
          <input type="email" class="form-control" placeholder="Email" value="{{$user->email}}" name="email" >
          <small class="text-danger">{{$errors->first('email')}}</small>
        </div>
        
        <div class=" mb-3 col-md-6">
          <label for="">Username</label>
          <input type="text" class="form-control" placeholder="Username" value="{{$user->username}}" name="username" >
          <small class="text-danger">{{$errors->first('username')}}</small>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="">Application Type</label>
                  <select class="form-control select2bs4"  style="width: 100%;" name="program_type">
                    <option selected="selected">{{$user->program_type}}</option>
                    <option value="high school Leavers/SSCE Holders"> High School Leavers/SSCE Holders</option>
                    <option value="Undergraduate">Undergraduate</option>
                  </select>
                  <small class="text-danger">{{$errors->first('program_type')}}</small>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="">City/town</label>
                <input type="text" class="form-control" placeholder="City/Town"name="city" value="{{$user->city}}" >
                <small class="text-danger">{{$errors->first('city')}}</small>
                </div>
            </div>
        </div>
       <div class="row">
        <div class="text">
              <p class="login-box-msg">Permanent Address</p>
        </div>
       </div>
        <div class="row">
             <div class="form-group mb-3 col-md-6">
               <label for="">Resident Address</label>
                <textarea class="form-control" rows="3" placeholder="Apt./Street/P.O.Box" name="address">
                   {{$user->address}}
                </textarea>
                <small class="text-danger">{{$errors->first('address')}}</small>
             </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="">Country</label>
                  <select class="form-control select2bs4" id="country7" style="width: 100%;" name="country">
                    <option selected="selected"> {{$user->country}}</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Ghana">Ghana</option>
                  </select>
                  <small class="text-danger">{{$errors->first('country')}}</small>
                </div>
            </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-md-4">
            <button type="submit" class="btn btn-success btn-block">Update</button>
          </div>
          <!-- /.col -->
        </div>
      </form>



      <!-- <h3 class="login-box-msg mb-4">Complete Registration</h3> -->
     
      @if(is_null($user->credential))
      @else
      @if($user->program_type !== "Undergraduate") 
      @if(is_null($user->credential))
      <div class="sub-heading mt-5">
        <h5 class="text-success">Examination Details</h5>
      </div>
      <form action="{{route('credential.update', $user->credential->id)}}" method="post" enctype="multipart/form-data" class="mt-3">
        @csrf

        <div class="row">
        <div class="input mb-3 col-md-4">
        <label for="">High school name</label>
          <input type="text" class="form-control" placeholder="High school name" value="{{$user->credential->school_name}}" name="school_name">
          <small class="text-danger">{{$errors->first('school_name')}}</small>
        </div>

        <div class="input mb-3 col-md-4">
          <label for="">High school address</label>
          <input type="text" class="form-control" placeholder="High school address" value="{{$user->credential->school_address}}" name="school_address">
          <small class="text-danger">{{$errors->first('school_address')}}</small>
        </div>

        <div class="input mb-3 col-md-4">
        <label for="">High school state</label>
          <input type="text" class="form-control" placeholder="High School state" value="{{$user->credential->school_state}}" name="school_state">
          <small class="text-danger">{{$errors->first('school_state')}}</small>
        </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-4">
            <label for="">Expected date of graduation</label>
            <input type="text" class="form-control" id="datepicker" placeholder="2019" value="{{$user->credential->expected_date_of_graduation}}"   name="expected_date_of_graduation"/>
            <small class="text-danger">{{$errors->first('expected_date_of_graduation')}}</small>
            </div>
              <div class="col-md-4 mb-3">
              <label for="">Type of result</label>
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="type_of_result">
                    <option selected="selected">{{$user->credential->school_name}}</option>
                    <option value="ssce">SSCE</option>
                    <option value="waec">WAEC</option>
                    <option value="gce">GCE</option>
                    <option value="neco">NECO</option>
                  </select>
                  <small class="text-danger">{{$errors->first('type_of_result')}}</small>
                </div>
            </div>
            <div class="mb-3 col-md-4">
            <label for="">Examination year</label>
            <input type="text" class="form-control" id="datepicker2" placeholder="Examination year" value="{{$user->credential->school_name}}" name="exam_year">
            <small class="text-danger">{{$errors->first('exam_year')}}</small>
          </div>
        </div>
       

        <div class="row">
            <div class="mb-3 col-md-3">
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="subject_one">
                    <option selected="selected">{{$user->credential->subject_one}}</option>
                    <option value="english">English</option>
                    <option value="english literature">English Literature</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="geography">Geography</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="financial Accounting">Financial Accounting</option>
                    <option value="economics">Economics</option>
                    <option value="comerce">Commerce</option>
                    <option value="government">Government</option>
                    <option value="history">History</option>
                  </select>
                </div>            </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="grade_one">
                    <option selected="selected">{{$user->credential->grade_one}}</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                  </select>
                </div>
            </div>

            <div class="mb-3 col-md-3">
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="subject_two">
                    <option selected="selected">{{$user->credential->subject_two}}</option>
                    <option value="english">English</option>
                    <option value="english literature">English Literature</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="geography">Geography</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="financial Accounting">Financial Accounting</option>
                    <option value="economics">Economics</option>
                    <option value="comerce">Commerce</option>
                    <option value="government">Government</option>
                    <option value="history">History</option>
                  </select>
                </div>            </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="grade_two">
                    <option selected="selected">{{$user->credential->grade_two}}</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                  </select>
                </div>
            </div> 

            
        </div>

    


        <div class="row">
            <div class="mb-3 col-md-3">
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="subject_three">
                    <option selected="selected">{{$user->credential->subject_three}}</option>
                    <option value="english">English</option>
                    <option value="english literature">English Literature</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="geography">Geography</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="financial Accounting">Financial Accounting</option>
                    <option value="economics">Economics</option>
                    <option value="comerce">Commerce</option>
                    <option value="government">Government</option>
                    <option value="history">History</option>
                  </select>
                </div>            </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="grade_three">
                    <option selected="selected">{{$user->credential->grade_three}}</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                  </select>
                </div>
            </div>

            <div class="mb-3 col-md-3">
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="subject_four">
                    <option selected="selected">{{$user->credential->subject_four}}</option>
                    <option value="english">English</option>
                    <option value="english literature">English Literature</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="geography">Geography</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="financial Accounting">Financial Accounting</option>
                    <option value="economics">Economics</option>
                    <option value="comerce">Commerce</option>
                    <option value="government">Government</option>
                    <option value="history">History</option>
                  </select>
                </div>            </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="grade_four">
                    <option selected="selected">{{$user->credential->grade_four}}</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                  </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-md-3">
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="subject_five">
                    <option selected="selected">{{$user->credential->subject_five}}</option>
                    <option value="english">English</option>
                    <option value="english literature">English Literature</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="geography">Geography</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="financial Accounting">Financial Accounting</option>
                    <option value="economics">Economics</option>
                    <option value="comerce">Commerce</option>
                    <option value="government">Government</option>
                    <option value="history">History</option>
                  </select>
                </div>            </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="grade_five">
                    <option selected="selected">{{$user->credential->grade_five}}</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                  </select>
                </div>
            </div>
            <div class="mb-3 col-md-3">
            <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="subject_six">
                    <option selected="selected">{{$user->credential->subject_six}}</option>
                    <option value="english">English</option>
                    <option value="english literature">English Literature</option>
                    <option value="mathematics">Mathematics</option>
                    <option value="biology">Biology</option>
                    <option value="physics">Physics</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="geography">Geography</option>
                    <option value="chemistry">Chemistry</option>
                    <option value="financial Accounting">Financial Accounting</option>
                    <option value="economics">Economics</option>
                    <option value="comerce">Commerce</option>
                    <option value="government">Government</option>
                    <option value="history">History</option>
                  </select>
                </div>          
              </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="grade_six">
                    <option selected="selected">{{$user->credential->grade_six}}</option>
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                  </select>
                </div>
           
            </div>
           
        </div>

        <div class="row">
              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
             
                    <input type="checkbox" class="form-check-input" value="English" id="exampleCheckeng"name="subject_combination[]"   {{ in_array('English', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheck1">English</label>
                </div>
              </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Mathematics" id="exampleCheckmaths"name="subject_combination[]" {{ in_array('Mathematics', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheck1">Mathematics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Biology" id="exampleCheckbio"name="subject_combination[]" {{ in_array('Biology', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheck1">Biology</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Physics" id="exampleCheckphy"name="subject_combination[]" {{ in_array('Physics', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckphy">Physics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="English Literature" id="exampleCheckenglit"name="subject_combination[]"  {{ in_array('English Literature', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckenglit">English Literature</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="History" id="exampleCheckhistory" name="subject_combination[]" {{ in_array('History', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckhistory">History</label>
                </div>
              </div>
              </div>
          </div>


          <div class="row">
          <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Chemistry" id="exampleCheckchem"name="subject_combination[]" {{ in_array('Chemistry', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckchem">Chemistry</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Geography" id="exampleCheckgeo"name="subject_combination[]" {{ in_array('Geography', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheckgeo">Geography</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Financial Accounting" id="exampleCheckacct"name="subject_combination[]" {{ in_array('Financial Accounting', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckengAcc">Financial Accounting</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Economics" id="exampleCheckecons"name="subject_combination[]" {{ in_array('Economics', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckecons">Economics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Commerce" id="exampleCheckcom"name="subject_combination[]" {{ in_array('Commerce', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckcom">Commerce</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Government" id="exampleCheckgov"name="subject_combination[]"{{ in_array('Government', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheckgov">Government</label>
                </div>
              </div>
              </div>
          </div>

         <div class="row">
         <div class="col-md-4 mb-3">
         <label for="">Choice of course</label>
                <div class="form-group">
                  <select class="form-control select2bs4" id="courses" style="width: 100%;" name="courses">
                    <option selected="selected">{{$user->credential->courses    }}</option>
                    @foreach($courses as $course)
                    <option >{{$course->name}}</option>
                  @endforeach
                  </select>
                  <small class="text-danger">{{$errors->first('courses')}}</small>
                  
                </div>
            </div>

            <div class="col-md-4 mb-3">
            <label for="">Preferred state of examination</label>
                <div class="form-group">
                  <select class="form-control select2bs4"  style="width: 100%;" name="state_exam">
                    <option selected="selected">{{$user->credential->state_exam}}</option>
                    <option value="lagos">Lagos</option>
                    <option value="abuja">Abuja</option>
                    <option value="rivers">Rivers</option>
                    <option value="imo">Imo</option>
                    <option value="plateau">Plateau</option>
                    <option value="oyo">Oyo</option>
                    <option value="kano">Kano</option>
                    <option value="uyo">Uyo</option>
                    <option value="jalingo">Jalingo</option>
                  </select>
                  <small class="text-danger">{{$errors->first('state_exam')}}</small>
                </div>
            </div>
                  
              <div class=" col-md-4">
               <label for="">Passport</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name="passport">
                  <label class="custom-file-label" for="exampleInputFile">Upload</label>
                </div>
              </div>
            </div>
        <div class="row mt-3">
          <!-- /.col -->
          <div class="col-md-4">
            <button type="submit" class="btn btn-success btn-block">Update</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
     


<!-- Undergraduates profile -->

    @else
    <div class="sub-heading mt-5">
        <h5 class="text-success">Examination Details</h5>
      </div>
     <form action="{{route('undergraduate.update', $user->credential->id)}}" method="post" class="mt-5" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="input mb-3 col-md-4">
          <input type="text" class="form-control" placeholder="University of Study" value="{{$user->credential->school_name}}" name="school_name">
        </div>

        <div class="input mb-3 col-md-4">
          <input type="text" class="form-control" placeholder="Campus address" value="{{$user->credential->school_address}}" name="school_address">
        </div>

        <div class="input mb-3 col-md-4">
          <input type="text" class="form-control" placeholder="Campus state" value="{{$user->credential->school_state}}" name="school_state">
        </div>
        </div>

        <div class="row">
          <div class="input mb-3 col-md-4">
            <input type="text" class="form-control" placeholder="expected date of graduation" name="expected_date_of_graduation" value="{{$user->credential->expected_date_of_graduation}}">
          </div>

          <div class="input mb-3 col-md-4">
            <input type="text" class="form-control" placeholder="Program of Study/Major" name="program_of_study" value="{{$user->credential->program_of_study}}">
          </div>

          <div class="col-md-4 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="present_level" >
                    <option selected="selected">{{$user->credential->present_level}}</option>
                    <option value="100 level">100 Level</option>
                    <option value="200 level">200 Level</option>
                    <option value="300 level">300 level</option>
                  </select>
                </div>
        </div>
        </div>

      <div class="row">
         <div class="col-md-6 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="enrolment_status">
                    <option selected="selected">{{$user->credential->enrolment_status}}</option>
                    <option value="full time">Full Time</option>
                    <option value="part time">Part Time</option>
                  </select>
                </div>
              </div>

            <div class="input mb-3 col-md-6">
              <input type="text" class="form-control" placeholder="Present CGPA" name="present_cgpa" value="{{$user->credential->present_cgpa}}">
            </div>
        </div>
   



        <div class="row">
              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
             
                    <input type="checkbox" class="form-check-input" value="English" id="exampleCheckeng"name="subject_combination[]"   {{ in_array('English', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheck1">English</label>
                </div>
              </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Mathematics" id="exampleCheckmaths"name="subject_combination[]" {{ in_array('Mathematics', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheck1">Mathematics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Biology" id="exampleCheckbio"name="subject_combination[]" {{ in_array('Biology', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheck1">Biology</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Physics" id="exampleCheckphy"name="subject_combination[]" {{ in_array('Physics', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckphy">Physics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="English Literature" id="exampleCheckenglit"name="subject_combination[]"  {{ in_array('English Literature', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckenglit">English Literature</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="History" id="exampleCheckhistory" name="subject_combination[]" {{ in_array('History', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckhistory">History</label>
                </div>
              </div>
              </div>
          </div>


          <div class="row">
          <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Chemistry" id="exampleCheckchem"name="subject_combination[]" {{ in_array('Chemistry', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckchem">Chemistry</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Geography" id="exampleCheckgeo"name="subject_combination[]" {{ in_array('Geography', $subject_com) ? 'checked' : ''}} >
                    <label class="form-check-label" for="exampleCheckgeo">Geography</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Financial Accounting" id="exampleCheckacct"name="subject_combination[]" {{ in_array('Financial Accounting', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckengAcc">Financial Accounting</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Economics" id="exampleCheckecons"name="subject_combination[]" {{ in_array('Economics', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckecons">Economics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Commerce" id="exampleCheckcom"name="subject_combination[]" {{ in_array('Commerce', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckcom">Commerce</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Government" id="exampleCheckgov"name="subject_combination[]" {{ in_array('Government', $subject_com) ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheckgov">Government</label>
                </div>
              </div>
              </div>
          </div>

          <div class="row">
         <div class="col-md-4 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4" id="courses" style="width: 100%;" name="courses">
                    <option selected="selected">{{$user->credential->courses}}</option>
                    @foreach($courses as $course)
                    <option >{{$course->name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <select class="form-control select2bs4"  style="width: 100%;" name="state_exam">
                    <option selected="selected">{{$user->credential->state_exam}}</option>
                    <option value="lagos">Lagos</option>
                    <option value="abuja">Abuja</option>
                    <option value="rivers">Rivers</option>
                    <option value="imo">Imo</option>
                    <option value="plateau">Plateau</option>
                    <option value="oyo">Oyo</option>
                    <option value="kano">Kano</option>
                    <option value="uyo">Uyo</option>
                    <option value="jalingo">Jalingo</option>
                  </select>
                </div>
            </div>
            <div class="input-group col-md-4">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="passport" id="exampleInputFile" value="{{$user->credential->passport}}">
                  <label class="custom-file-label" for="exampleInputFile">Upload Your Passport</label>
                </div>
              </div>
            </div>
               
            <div class="row mt-3">
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-success btn-block">Update</button>
              </div>
              <!-- /.col -->
            </div>
     
         </div>

       
      </form>
      
      @endif
     </div>
     @endif
     @endif
    </div>
    </div>
    <!-- /.form-box -->
  </div>
  <input id="email" type="hidden" value="{{Sentinel::getUser()->email}}">

  <input id="userId" type="hidden" value="{{Sentinel::getUser()->id}}">
  
  </div><!-- /.container-fluid -->

<script>
 var email = document.getElementById('email').value;
var userId = document.getElementById('userId').value;
function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_live_0eca91d39c8f08649c1cb92aa9920253b15e23ed',
      email: email,
      amount: 2850000,
      currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2348012345678"
            }
         ]
      },
      callback: function(response){
           if(response.reference){
            $.ajax({
                url: '/users/payment/completed/{id}',
                type: 'GET',
                data: { id:  userId  },
                success: function(response){
                    console.log(response)
                }
            });
           }	
           else{
             alert("there was an error")
           }

      },
      onClose: function(){
      
      }
    });
    handler.openIframe();
  }
    </script>
  </section>

    @endsection
   