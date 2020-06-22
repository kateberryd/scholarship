@extends('layouts.main')
@section('admin')
    <section class="content mt-5 ml-5">
      <div class="container-fluid">
      <div class="printbtn mt-3 ml-5 float-md-right" >
              <button class="btn btn-success" id="print">Print Details</button>
            </div>
        <div class="row">
        @if(is_null($user->credential))
        <div class="alert alert-danger  mt-5 col-md-6 offset-md-2"  role="alert" alert-dismissable>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5 class="text-white">Registration Not Completed!</h5>
        </div>
         @else
        <div class="card card-success card-outline w-100">
              <div class="card-body box-profile print-container">
              <h4>Applicant Profile</h4>
                <div class="pull-right">
                <img class="  img-sqaure" width="100" height="100" style="object-fit:contain"
                       src="/uploads/passports/{{$user->credential->passport}}"
                       alt="Passport">
                       <p>Applicant passport</p>
                </div>

                <table class="table table-hover">
                  <tbody>
                    <tr>
                      <th scope="row">Surname</th>
                      <td>{{$user->last_name}}</td>
                    </tr>
                    <tr>
                      <th scope="row">First Name</th>
                      <td>{{$user->first_name}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Other Name</th>
                      <td>{{$user->other_name}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Registeration No.</th>
                      <td>{{$user->credential->unique_code}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Gender</th>
                      <td>{{$user->sex}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Date of Birth</th>
                      <td>{{$user->date_birth}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Marital Status</th>
                      <td>{{$user->marital_status}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Email Address/Username.</th>
                      <td>{{$user->email}}/{{$user->username}}</td>
                    </tr>
                    
                    <tr>
                      <th scope="row">Country of Birth</th>
                      <td>{{$user->birth_country}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Nationality</th>
                      <td>{{$user->nationality}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Are you a UWI staff/dependent</th>
                      <td>{{$user->uwi_staff_member}} / {{$user->dependant_uwi_staff}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Are you a Glomode staff/dependent</th>
                      <td>{{$user->glomode_staff_member}} / {{$user->dependant_glomode_staff}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Disability</th>
                      <td>{{$user->disability}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Mobile No1/Mobile No2</th>
                      <td>{{$user->mobile_one}}/{{$user->mobile_two}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Appliction Type </th>
                      <td>{{$user->program_type}}</td>
                    </tr>
                    <tr>
                      <th scope="row">City/Resident Address</th>
                      <td>{{$user->city}}/{{$user->address}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Country </th>
                      <td>{{$user->country}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Examination State</th>
                      <td>{{$user->credential->state_exam}}</td>
                    </tr>
                    <tr>
                      <th scope="row">High School Name</th>
                      <td>{{$user->credential->school_name}}</td>
                    </tr>
                    <tr>
                      <th scope="row">High School Address</th>
                      <td>{{$user->credential->school_address}}</td>
                    </tr>
                    <tr>
                      <th scope="row">High School State</th>
                      <td>{{$user->credential->school_state}}</td>
                    </tr>

                    <tr>
                      <th scope="row">Expected Date of Graduation</th>
                      <td>{{$user->credential->expected_date_of_graduation}}</td>
                    </tr>

                    <tr>
                      <th scope="row">Result Type</th>
                      <td>{{$user->credential->result_type}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Examination year</th>
                      <td>{{$user->credential->exam_year}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Subject/Grade</th>
                      <td>{{$user->credential->subject_one}} / {{$user->credential->grade_one}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Subject/Grade</th>
                      <td>{{$user->credential->subject_two}} / {{$user->credential->grade_two}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Subject/Grade</th>
                      <td>{{$user->credential->subject_three}} / {{$user->credential->grade_three}}</td>
                    </tr>

                    <tr>
                      <th scope="row">Subject/Grade</th>
                      <td>{{$user->credential->subject_four}} / {{$user->credential->grade_four}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Subject/Grade</th>
                      <td>{{$user->credential->subject_five}} / {{$user->credential->grade_five}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Subject/Grade</th>
                      <td>{{$user->credential->subject_six}} / {{$user->credential->grade_six}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Course of choice</th>
                      <td>{{$user->credential->courses}}</td>
                    </tr>
                    @foreach(unserialize($user->credential->subject_combination) as $subject)
                      <tr>
                      <th scope="row">Subject Combination</th>
                        <td> {{  $subject  }}</td>
                      </tr>
                    @endforeach 
                    
                  </tbody>
                </table>

                
                
                </p>

                <hr>   
              
               

                  @endif

              </div>
              <!-- /.card-body -->
            </div>
        </div>
      </div>
    </section>
  
@endsection