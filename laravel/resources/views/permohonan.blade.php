@extends('adminlte::page')

@section('title', 'Riwayat Permohonan')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Riwayat Permohonan</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3>{{ $datatotal }}</h3>

                <p>Jumlah Permohonan</p>
              </div>
              <a href="/permohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $dataacc }}</h3>

                <p>Permohonan Tervalidasi</p>
              </div>
              <a href="/permohonan/masuk" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $dataverivikasi }}</h3>

                <p>Permohonan Belum Tervalidasi</p>
              </div>
              <a href="/permohonan/belumtervalidasi" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $datatolak }}</h3>

                <p>Permohonan Ditolak</p>
              </div>
              <a href="/permohonan/ditolak" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->
        </div>
              <div class="card-header">
                <h3 class="card-title">Tabel Permohonan</h3>
                <a href="/permohonan/cetak" class="btn btn-primary float-right">Cetak Laporan</a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover-responsive">
                  <thead>
                    <!--<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
                      Tambah Data
                    </button> -->
                    <a href="/permohonan/tambah" class="btn btn-primary float-right">Ajukan Permohonan Baru</a> 
                  <tr>
                    <th>No</th>
                    <th>No Permohonan</th>
                    <th>Nama Kegiatan</th>
                    <th>Lokasi</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Rincian</th>
                    <th>File Lampiran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($permohonan as $no => $p)
                    <tr>
                      <td>{{ $no+1 }}</td>
	                    <td>{{ $p->no_permohonan }}</td>
	                    <td>{{ $p->nama_kegiatan }}</td>
	                    <td>{{ $p->lokasi }}</td>
	                    <td>{{ $p->tgl_mulai }}</td>
	                    <td>{{ $p->tgl_selesai }}</td>
	                    <td>{{ $p->rincian }}</td>
	                    <td><a href="#" class="create-comment" data-modal="{{ $p->id_permohonan }}">{{ $p->file }}</a></td>
	                    <td>{{ $p->status_permohonan }}</td>
	                    <td>
                        <a href="/permohonan/hapus/{{ $p->id_permohonan }}" class="btn btn-outline-danger" onclick="return confirm('Yakin ingin menghapus permohonan ini?')">Hapus</a>
	                    </td>
                    </tr>

                    <div class="modal fade" role="dialog" id="comment-modal-{{ $p->id_permohonan }}">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">File Lampiran</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p> <center>{{$p->file}}</center></p>
              <embed src="{{asset('/lampiran/'.$p->file)}}"
                               frameborder="0" width="100%" height="400px">
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             
            
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
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
<script>
// edit juga jquerynya jadi gini:
$('.create-comment').on('click', function (event) {
    event.preventDefault();
    // tangkap id modal yang ingin dimunculkan
    var id = $(this).attr('data-modal');

    // munculkan modal berdasarkan id
    $('#comment-modal-'+id).modal();
});
</script>
@stop