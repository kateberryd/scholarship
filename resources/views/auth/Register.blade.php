<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Glomode | Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/backend/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/backend/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

  <link rel="stylesheet" href="/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style>
      .register-box{
          width: 660px !important;
          margin-top: 5px !important; 
      }
      .register-page{
        background-image: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
        url(/frontend/img/bg-img/bg-3.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        height:100vh

      }
  </style>
</head>
<body class="hold-transition register-page"> 
<div class="register-box">

  <div class="register-logo">
    <a href="../../index2.html" class="text-success"><b>Glo</b>Mode</a>
  </div>

  <div class="card " >
    <div class="card-body register-card-body">
    @if(session('error'))
      <div class="alert alert-danger alert-dismissable"> 
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('error') }}
      </div>
      @endif

      @if(session('success'))
      <div class="alert alert-success alert-dismissable"> 
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ session('success') }}
      </div>
      @endif 
      <!-- @foreach ($errors->all() as $error)
      <div class="alert alert-danger alert-dissmissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ $error }}
      </div>
      @endforeach -->
      <p class="login-box-msg text-success">Create an account with Glomode</p>

      <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="row">
        <div class=" mb-3 col-md-4">
          <label for="">First Name</label>
          <input type="text" class="form-control" placeholder="First name" name="first_name">
          <small class="text-danger">{{$errors->first('first_name')}}</small>
        </div>

        <div class=" mb-3 col-md-4">
          <label for="">Last Name</label>
          <input type="text" class="form-control" placeholder="last name" name="last_name">
          <small class="text-danger">{{$errors->first('last_name')}}</small>
        </div>

        <div class=" mb-3 col-md-4">
          <label for="">Middle Name</label>
          <input type="text" class="form-control" placeholder="Middle name" name="middle_name">
          <small >Optional</small>
         </div>
        </div>
        <div class="row">
            <div class="mb-3 col-md-4">
            <label>Date of birth</label>
            <input type="date" class="form-control" id="datepicker3" placeholder="Date of Birth" name="date_birth">
            <small class="text-danger">{{$errors->first('date_birth')}}</small>
            </div>
              <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Gender</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="sex">
                    <option selected="selected">Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select>
                  <small class="text-danger">{{$errors->first('sex')}}</small>
                </div> 
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Marital Status</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="marital_status">
                    <option selected="selected">Marital Status</option>
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
                  <select class="form-control select2bs4" id="country2" style="width: 100%;" name="birth_country">
                    <option selected="selected">Country of Birth</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                  </select>
                  <small class="text-danger">{{$errors->first('birth_country')}}</small>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Nationality</label>
                  <select class="form-control select2bs4" id="country3" style="width: 100%;" name="nationality">
                    <option selected="selected">Nationality</option>
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
                    <option selected="selected">Are you a UWI staff</option>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('staff_of_uwi')}}</small>
                </div>
            </div>
       </div>

       <div class="row">
       <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a UWI dependant</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="dependent_of_uwi">
                    <option selected="selected">Are you a dependant of UWI staff</option>
                    <option value="yes">Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('dependent_of_uwi')}}</small>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a GLOMODE staff</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="glomode_staff">
                    <option selected="selected">Are you a GLOMODE staff</option>
                    <option value="yes" >Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('glomode_staff')}}</small>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Are you a GLMD dependant</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="dependent_glomode_staff">
                    <option selected="selected">Are you a dependant of GLOMODE staff</option>
                    <option value="yes">Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('dependent_glomode_staff')}}</small>
                </div>
            </div>
       </div>
       <div class="row">
       <div class="col-md-4 mb-3">
                <div class="form-group">
                  <label for="">Disability</label>
                  <select class="form-control select2bs4" style="width: 100%;" name="disability">
                    <option selected="selected">Disability</option>
                    <option value="yes">Yes </option>
                    <option value="no">No</option>
                  </select>
                  <small class="text-danger">{{$errors->first('disability')}}</small>
                </div>
            </div>

            <div class=" mb-3 col-md-4">
              <label for="">Phone No1.</label>
            <input type="text" class="form-control" placeholder="Mobile One" name="mobile_one">
            <small class="text-danger">{{$errors->first('mobile_one')}}</small>
            </div>

        <div class=" mb-3 col-md-4">
          <label for="">Phone No2.</label>
          <input type="text" class="form-control" placeholder="Mobile Two" name="mobile_two">
          <small class="ml-3">Optional</small>
        </div>

       </div>
        <div class="row">
          
        <div class="mb-3 col-md-4">
          <label for="">Email Address</label>
          <input type="email" class="form-control" placeholder="Email" name="email" >
          <small class="text-danger">{{$errors->first('email')}}</small>
        </div>
        <div class=" mb-3 col-md-4">
          <label for="">Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password">
          <small class="text-danger">{{$errors->first('password')}}</small>
        </div>
        <div class=" mb-3 col-md-4">
          <label for="">Username</label>
          <input type="text" class="form-control" placeholder="Username"name="username" >
          <small class="text-danger">{{$errors->first('username')}}</small>
        </div>
        </div>
        <div class="row">
        <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="">Application Type</label>
                  <select class="form-control select2bs4"  style="width: 100%;" name="program_type">
                    <option selected="selected">Application type</option>
                    <option value="high school Leavers/SSCE Holders"> High School Leavers/SSCE Holders</option>
                    <option value="Undergraduate">Undergraduate</option>
                  </select>
                  <small class="text-danger">{{$errors->first('program_type')}}</small>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="">City/town</label>
                <input type="text" class="form-control" placeholder="City/Town"name="city" >
                <small class="text-danger">{{$errors->first('city')}}</small>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="form-group mb-3 col-md-6">
               <label for="">Residential Address</label>
                <textarea class="form-control" rows="3" placeholder="Apt./Street/P.O.Box" name="address"></textarea>
                <small class="text-danger">{{$errors->first('address')}}</small>
             </div>
            <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="">Country</label>
                  <select class="form-control select2bs4" id="country4" style="width: 100%;" name="country">
                    <option selected="selected">Country</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Ghana">Ghana</option>
                  </select>
                  <small class="text-danger">{{$errors->first('country')}}</small>
                </div>
            </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" data-toggle="modal" data-target="#exampleModalLong" required>
              <label for="agreeTerms">
               I agree to the <a class="text-success" href="#">terms and conditions</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block" >Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

     

      <a href="/auth/login" class="text-center text-success">Already have an Account</a>
    </div>
    <!-- /.form-box -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Terms and conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>I confirm that the information provided is correct and acknowledge that any incorrect information provided will be grounds for the application to be rejected. I accept that only those who passed the first stage will be eligible for the second stage and those who passed the second stage will be eligible for the final stage.</p>
        <p>I shall abide by the rules and regulations of the Scholarship Entrance Examination Process and accept the outcome of the Scholarship Selection Process of successful candidates by the Scholarship Award Team.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  </div><!-- /.card -->

  <!-- Button trigger modal -->
<!-- Modal -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/backend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/backend/plugins/select2/js/select2.full.min.js"></script>
<script src="/backend/dist/js/country-state-select.js"></script>
<!-- AdminLTE App -->
<script src="/backend/dist/js/adminlte.min.js"></script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

   

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })

        // populateCountries("country", "state");
        populateCountries("country2");
        populateCountries("country3");
        populateCountries("country4");
</script>
</body>
</html>
