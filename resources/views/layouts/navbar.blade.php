<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Welcome <span class="mr-5">{{ Sentinel::getUser()->first_name }} {{Sentinel::getUser()->last_name}}</span></a>
      </li>
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item ">
         <form  action="{{ route('logout') }}" method="post" id="logout-form">
                {{ csrf_field() }}
                <a class="dropdown-item" href="#" onclick="document.getElementById('logout-form').submit()" style="cursor: pointer;">
                  <i class="fa fa-power-off m-r-5 m-l-5"></i> 
                  Logout
                </a>                        
           </form>
      </li>
      <!-- Notifications Dropdown Menu -->
    </ul>
  </nav>
  <!-- /.navbar -->