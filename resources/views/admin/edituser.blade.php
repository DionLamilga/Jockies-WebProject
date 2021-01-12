@extends('admin.adminlayouts.adminmaster')
@section('content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Admin</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      
    <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Admin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($penggunas as $p)
              <form action="{{ route('updateUser') }}" method="post" class= "form-horizontal">
              {{ csrf_field() }}
                <div class="card-body">
                
                <input type="hidden" name="id" value="{{ $p->id }}">
                  <div class="form-group row">
                    <label for="inputusername" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{ $p->username }}" class="form-control" id="inputusername" placeholder="Username" name="username">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" value="{{ $p->email }}" class="form-control" id="inputemail" placeholder="Email" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputpassword" placeholder="password" name="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputuserrole" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                      <input type="text" value="{{ $p->role }}" class="form-control" id="inputrole" placeholder="Username" name="role">
                    </div>
                  </div>
                  <input type="hidden" name="remember_token" value="a">
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" value="register" class="btn btn-info float-right">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
              @endforeach
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@stop