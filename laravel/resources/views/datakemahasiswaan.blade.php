@extends('adminlte::page')

@section('title', 'Data Kemahasiswaan')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Data Kemahasiswaan</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Kemahasiswaan :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover-responsive">
                  <thead>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
                      Tambah Data
                    </button>
                  <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Tgl Lahir</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($kemahasiswaan as $no => $p)
                    <tr>
	                    <td>{{ $no +1 }}</td>
	                    <td>{{ $p->nim }}</td>
	                    <td>{{ $p->name }}</td>
	                    <td>{{ $p->email }}</td>
	                    <td>{{ $p->telp }}</td>
	                    <td>{{ $p->tgl_lahir }}</td>
		                  <td><a href="/datakemahasiswaan/edit/{{ $p->nim }}" class="btn btn-outline-primary">Edit</a>
                      <a href="/datakemahasiswaan/hapus/{{ $p->nim }}" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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

      <!-- /Tambah Admin -->
      <form action="/datakemahasiswaan/simpan" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Kemahasiswaan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <input type="hidden" name="role" class="form-control" placeholder="Nama" value="kemahasiswaan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">NIP</label>
                <input type="text" name="nim" class="form-control" placeholder="NIP" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Password (minim 8 charakter)</label>
                <input type="password" name="password" class="form-control" placeholder="Password Minimal 8 Karakter" required>
              </div>
              <div class="form-group">
               <label for="exampleInputEmail1">No Telepon</label>
                <input type="number" name="telp" class="form-control" placeholder="No Telepon" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Foto Profil</label>
                <input type="file" name="profile" class="form-control" placeholder="Nama" accept="image/png, image/jpeg" required>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      </form>

    </section>
@stop

@section('footer')
<footer class="left-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
    </div>
    <strong>Copyright &copy; 2023 <a href="#">Bisma Fajar Hidayat</a>.</strong> All rights reserved.
</footer>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false, "scrollX": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@stop