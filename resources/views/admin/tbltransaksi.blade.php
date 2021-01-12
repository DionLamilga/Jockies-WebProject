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
                    <h3 class="card-title">Transaksi Table</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>ID User</th>
                        <th>In Game Name</th>
                        <th>Password</th>
                        <th>Rank Awal</th>
                        <th>Rank Akhir</th>
                        <th>No. Telfon</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1 ?>
                    @foreach($transaksis as $p)
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->ign }}</td>
                        <td>{{ $p->pass }}</td>
                        <td>{{ $p->rank_awal }}</td>
                        <td>{{ $p->rank_tujuan }}</td>
                        <td>{{ $p->notelp }}</td>
                        <td>
                        <a href="/admin/deltransaksi/{{ $p->id_tr }}" class="btn-sm btn-danger">Hapus</a>
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