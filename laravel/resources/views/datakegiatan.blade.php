@extends('adminlte::page')

@section('title', 'Data Kegiatan')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Data Kegiatan</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Kegiatan :</h3>
                
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
                    <th>Kategori</th>
                    <th>Nama Kegiatan</th>
                    <th>Poin</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($kegiatan as $no => $p)
                    <tr>
	                    <td>{{ $no +1 }}</td>
	                    <td>{{ $p->nama_kategori }}</td>
                      <td>{{ $p->nama_kegiatan }}</td>
	                    <td>{{ $p->point }}</td>
	                    <td>
		                  <a href="/datakegiatan/edit/{{ $p->id_kegiatan }}" class="btn btn-outline-primary">Edit</a>
                      <a href="/datakegiatan/hapus/{{ $p->id_kegiatan }}" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
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
      <form action="/datakegiatan/tambah" method="get">
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Kegiatan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Kategori</label>
                <select name="id_kategori" class="custom-select form-control-border" id="exampleSelectBorder" >
                  <option value="1">Kompetisi</option>
                  <option value="2">Pengakuan (termasuk kepanitiaan)</option>
                  <option value="3">Penghargaan</option>
                  <option value="4">Karir Organisasi (per periode kepengurusan)</option>
                  <option value="5">Hasil Karya</option>
                  <option value="6">Pemberdayaan atau Aksi Kemanusiaan</option>
                  <option value="7">Kewirausahaan</option>
                  <option value="8">PKKMB</option>
                  <option value="9">PKKM</option>
                  <option value="10">Asisten (per Mata Kuliah, maksimal 3 Mata Kuliah)</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Kegiatan</label>
                <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Poin</label>
                <input type="number" name="poin" class="form-control" placeholder="1 - 100" required min="1" max="100">
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
<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

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