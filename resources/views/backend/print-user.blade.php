@extends('layouts.main')
@section('users')
    <section class="content ">
      <div class="container-fluid">
      <div class="printbtn mt-3 ml-5 float-md-right"  >
           <button class="btn btn-success" id="print">Print Details</button>
        </div>
        <div class="row">
        @if( is_null($user->credential))
          <div class="alert alert-danger  mt-5 col-md-6 offset-md-2"  role="alert" alert-dismissable>
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h5 class="text-white">Examination slip not ready yet!</h5>
          </div>
       @else
        <div class="card mt-2 text-black w-100" >
        <div class="ml-3 print-container">
        <div class="text-center mt-4">
                  <img class="" width="200" height=""
                       src="/frontend/img/bg-img/glomode-logo.png"
                       alt="logo">
                </div>
       
              <div class="card-body box-profile">
              <h4  class="text-center  text-success">Glomode Applicant Slip</h4>
                <div class="text-left">
                  <img class="  img-sqaure" width="150" height="150" style="object-fit:contain"
                       src="/uploads/passports/{{$user->credential->passport}}"
                       alt="Passport">
                       <p>Applicant passport</p>
                </div>
                    <table  class="table table-hover">
                    <thead>
                
                    </thead>
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
                      <th scope="row">Gender</th>
                      <td>{{$user->sex}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Date of birth</th>
                      <td>{{$user->date_birth}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Email Address/Phone No.</th>
                      <td>{{$user->email}}/{{$user->mobile_one}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Registeration No.</th>
                      <td>{{$user->credential->unique_code}}</td>
                    </tr>
                    <tr>
                      <th scope="row">Examination State</th>
                      <td>{{$user->credential->state_exam}}</td>
                    </tr>

                    <tr>
                      <th scope="row">Course</th>
                      <td>{{$user->credential->courses}}</td>
                    </tr>

                    <tr>
                      <th scope="row">Payment Status</th>
                      <td>{{$user->credential->payment_status}}</td>
                    </tr>
                  </tbody>
                </table>
               @if(is_null($user->credential->subject_combination))
               @else  
                <h4 class="mt-4 text-success">GSE Subjects</h4>
                  @foreach(unserialize($user->credential->subject_combination) as $subject)
                     <ul >
                        <li class="mb-0 mt-0"> {{  $subject  }}</li>
                    </ul>
                    @endforeach 
                  
                 @endif
                <hr>
              </div>
              <!-- /.card-body -->
              @endif
              </div>
            </div>
        </div>
      </div>
    </section>
@endsection