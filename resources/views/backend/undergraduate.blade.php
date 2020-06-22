

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
    <div class="note mt-2 mb-2">
     <p class="text-success"><i>Make sure to read the programmes combination on the GUI (Programmes Eligible For Scholarship ) <a href="/eligible-programmes">Click Here</a></i></p>
    </div>
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
      <form action="{{route('undergraduate.store')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="row">
        <div class="input mb-3 col-md-4">
          <label for="">University of Study</label>
          <input type="text" class="form-control" placeholder="University of Study" name="school_name">
          <small class="text-danger">{{$errors->first('school_name')}}</small>
        </div>

        <div class="input mb-3 col-md-4">
          <label for="">Campus address</label>
          <input type="text" class="form-control" placeholder="Campus address" name="school_address">
          <small class="text-danger">{{$errors->first('school_address')}}</small>
        </div>

        <div class="input mb-3 col-md-4">
          <label for="">Campus state</label>
          <input type="text" class="form-control" placeholder="Campus state" name="school_state">
          <small class="text-danger">{{$errors->first('school_state')}}</small>
        </div>
        </div>

        <div class="row">
          <div class="input mb-3 col-md-4">
          <label for="">Expected date of graduation</label>
            <input type="text" class="form-control" placeholder="expected date of graduation" name="expected_date_of_graduation">
            <small class="text-danger">{{$errors->first('expected_date_of_graduation')}}</small>
          </div>

          <div class="input mb-3 col-md-4">
          <label for="">Program of study/major</label>
            <input type="text" class="form-control" placeholder="Program of study/major" name="program_of_study">
            <small class="text-danger">{{$errors->first('program_of_study')}}</small>
          </div>

          <div class="col-md-4 mb-3">
              <label for="">Present Level</label>
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="present_level">
                    <option selected="selected">Present Level</option>
                    <option value="100 level">100 Level</option>
                    <option value="200 level">200 Level</option>
                    <option value="300 level">300 level</option>
                  </select>
                  
                </div>
                <small class="text-danger">{{$errors->first('present_level')}}</small>
        </div>
        </div>

      <div class="row">
         <div class="col-md-6 mb-3">
         <label for="">Enrolment status</label>
                <div class="form-group">
                  <select class="form-control select2bs4" style="width: 100%;" name="enrolment_status">
                    <option selected="selected">Enrolment Status</option>
                    <option value="full time">Full Time</option>
                    <option value="part time">Part Time</option>
                  </select>
                  
                </div>
                <small class="text-danger">{{$errors->first('enrolment_status')}}</small>
              </div>

            <div class="input mb-3 col-md-6">
            <label for="">Present CGPA</label>
              <input type="text" class="form-control" placeholder="Present CGPA" name="present_cgpa">
              <small class="text-danger">{{$errors->first('present_cgpa')}}</small>
            </div>
        </div>

        <div class="row">
        <div class="col-md-6 mb-3">
         <label for="">Choice of course</label>
                <div class="form-group">
                  <select class="form-control select2bs4"  style="width: 100%;" name="courses">
                    <option selected="selected">Select course</option>
                    @foreach($courses as $course)
                    <option >{{$course->name}}</option>
                  @endforeach
                  </select>
                  <small class="text-danger">{{$errors->first('courses')}}</small>
                  
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-group">
                <label for="">Preferred State of Examination</label>
                  <select class="form-control select2bs4"  style="width: 100%;" name="state_exam">
                    <option selected="selected">Preferred State of Examination</option>
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
            </div>

          <div class="row cbt-subjects mb-3">
            <h5 class="text-success">CBT Subjects Combination</h5>
          </div>

            <div class="row">
              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="English" id="exampleCheckeng"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheck1">English</label>
                </div>
              </div>
              </div>
              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Mathematics" id="exampleCheckmaths"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheck1">Mathematics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Biology" id="exampleCheckbio"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheck1">Biology</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Physics" id="exampleCheckphy"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckphy">Physics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="English Literature" id="exampleCheckenglit"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckenglit">English Literature</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="History" id="exampleCheckhistory" name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckhistory">History</label>
                </div>
              </div>
              </div>
          </div>


          <div class="row">
          <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Chemistry" id="exampleCheckchem"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckchem">Chemistry</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Geography" id="exampleCheckgeo"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckgeo">Geography</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="financial Accounting" id="exampleCheckacct"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckengAcc">Financial Accounting</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Economics" id="exampleCheckecons"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckecons">Economics</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Commerce" id="exampleCheckcom"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckcom">Commerce</label>
                </div>
              </div>
              </div>

              <div class="col-md-2">
              <div class="form-group">
              <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="Government" id="exampleCheckgov"name="subject_combination[]" >
                    <label class="form-check-label" for="exampleCheckgov">Government</label>
                </div>
              </div>
              </div>
          </div>

            <div class="row">
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
            <form >
              <script src="https://js.paystack.co/v1/inline.js"></script>
              <button type="button" class="btn btn-success btn-block" onclick="payWithPaystack()">Make Payment </button> 
            </form>
          </div>
          <div class="col-4">
            <button type="submit"  class="btn btn-success btn-block" id="submitbtn"  >Submit</button>
          </div>
          <!-- /.col -->
        </div>
         </div>

     
      </form>
     </div>
    </div>
    </div>
    <!-- /.form-box -->
  </div>
      
  <input id="email" type="hidden" value="{{Sentinel::getUser()->email}}">

  <input id="userId" type="hidden" value="{{Sentinel::getUser()->id}}">
      
    </div><!-- /.container-fluid -->
  </section>

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
@endsection
   
