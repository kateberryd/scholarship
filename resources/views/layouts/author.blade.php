<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
           GloMode
      <!-- <span class="brand-text font-weight-light">AdminLTE 3</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
           

          <li class="nav-item">
            <a href="{{ route('credential.index')}}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                O Level
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('undergraduate.index')}}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Undergraduate
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('credential.print', Sentinel::getUser()->id)}}" class="nav-link">
              <i class="nav-icon far fa-file"></i>
              <p>
                Applicant slip
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('credential.edit', Sentinel::getUser()->id)}}" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Edit profile
              </p>
            </a>
          </li>

          <li class="nav-item">
          <form >
              <script src="https://js.paystack.co/v1/inline.js"></script>
              <button type="button" class="btn btn-success btn-block" onclick="payWithPaystack()">Make Payment </button> 
          </form>
          </li>

         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  <input id="email" type="hidden" value="{{Sentinel::getUser()->email}}">

  <input id="userId" type="hidden" value="{{Sentinel::getUser()->id}}">
  </aside>

  <script>
  
var email = document.getElementById('email').value;
var userId = document.getElementById('userId').value;
function payWithPaystack(){
    var handler = PaystackPop.setup({
      key: 'pk_test_59ac7f8b9a7508f609623878467619a39760adf4',
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
           if(response.status == 'success'){
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

  