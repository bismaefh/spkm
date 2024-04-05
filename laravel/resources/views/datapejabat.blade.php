@extends('adminlte::page')

@section('title', 'Data Pejabat')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Data Pejabat</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pejabat :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover-responsive">
                  <thead>
                    
                  <tr>
                    <th>No</th>
                    <th>Nama Pejabat</th>
                    <th>Nomer Induk</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($pejabat as $no => $p)
                    <tr>
	                    <td>{{ $no +1 }}</td>
	                    <td>{{ $p->nama }}</td>
	                    <td>{{ $p->nip }}</td>
	                    <td>{{ $p->jabatan }}</td>
                      <td>
                      <a href="/datapejabat/edit/{{ $p->id_pejabat }}" class="btn btn-outline-primary" onclick="return confirm('Yakin ingin merubah data ini?')">Edit</a>
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

