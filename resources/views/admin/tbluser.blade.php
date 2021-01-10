@extends('admin.adminlayouts.adminmaster')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Table</h1>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">User Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    @foreach($penggunas as $p)
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->password }}</td>
                        <td>{{ $p->role }}</td>
                        <td>
                        <a href="/admin/edituser/{{ $p->id }}" class="btn-sm btn-success">Edit</a>
                        <a href="/admin/deluser/{{ $p->id }}" class="btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>

@stop