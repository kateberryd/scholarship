
@extends('layouts.main')

@section('admin')
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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{count($users)}}</h3>

                <p>Uncompleted Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{count($users)}}<sup style="font-size: 20px"></sup></h3>

                <p>Completed Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Credentials</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->  
            <div class="card">
            <div class="card-header">
              <h3 class="card-title">All GloMode Users</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Middle name</th>
                  <th>email</th>
                  <th>Gender</th>
                  <th>last login</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                      <td>{{$user->first_name}}</td>
                      <td>{{$user->last_name}}</td>
                      <td>{{$user->middle_name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->sex}}</td>
                      <td>{{$user->last_login}}</td>
                      <td>
                      <a class="btn btn-success btn-circle waves-effect waves-light"  href="{{ route('user.show', $user->slug)}}">
                        <span class="btn-label">
                          <i class="far fa-eye"></i>
                        </span>
                      </a>
                      <button class="btn btn-danger btn-circle waves-effect waves-light" data-toggle="modal" data-target="#deleteClientModal{{ $user->slug }}" data-toggle="tooltip" title="Delete Client" data-placement="top"><span class="btn-label"><i class="fa fa-trash"></i></span></button>
                    </td>
                    </tr>
                  @endforeach
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>First name</th>
                  <th>Last name</th>
                  <th>Middle name</th>
                  <th>email</th>
                  <th>Gender</th>
                  <th>last login</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
           

          @foreach($users as $modal)
            
            <!-- ///////////////////////////////////////// -->
        
            <div class="modal fade bs-example-modal-lg" id="deleteClientModal{{ $modal->slug }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Warning</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form class="form p-t-20" method="post" action="{{ route('user.delete', $modal->slug)}}" >
                    <div class="modal-body">
                      {{ csrf_field() }}
                      {{ method_field('GET') }}
                      <input type="hidden" name="id" value="{{ $modal->slug }}">          
        
                      <div class="row">
                        <div class="col-md-12">
                          <p>Are you sure you want to delete this user?</p>
                        </div>
                      </div>                                 
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-warning">Confirm Delete</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          @endforeach
          </section>
         
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>

    @endsection
   