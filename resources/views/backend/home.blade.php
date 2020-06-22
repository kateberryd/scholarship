@extends('layouts.main')
@section('users')
    <section class="content ">
      <div class="container-fluid m-0">
        <div class=" mt-2 text-black w-100" >
        <div class="">
              <div class=" box-profile" style=" padding:10px; background-image: linear-gradient(to bottom, rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url(/frontend/img/bg-img/scholarship10.jpeg); background-size: cover; height:80vh; background-repeat: no-repeat">
                     <div class="row">
                        <div class="col-md-7 offset-md-2">
                          <div class="  text-white pt-5 mt-5">
                            <h2>Welcome {{ Sentinel::getUser()->first_name }} </h2>
                            <h3>To begin your application process, please click on the menu to the left and select your application type.</h3>
                            <h3>Select either O'Level or Undergraduate to start your application. Also, read the programmes and subject combination list to know the scholarship examination subject combination required for programme selected. </h3>
                            
                          </div>
                        </div>
                     </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
@endsection