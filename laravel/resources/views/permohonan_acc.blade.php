@extends('adminlte::page')

@section('title', 'Riwayat Permohonan')

@section('content_header')
<h1></h1>
@stop

@section('content')
<h4>Riwayat Permohonan</h4>
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
                <h3>259</h3>

                <p>Data Masuk</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/permohonan/semuadata" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>

                <p>Permohonan Tervalidasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/permohonan/masuk/acc" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>44</h3>

                <p>Permohonan Belum Tervalidasi</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="/permohonan/belumtervalidasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Permohonan Ditolak</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="/permohonan/ditolak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </div>
          <!-- ./col -->
        </div>
              <div class="card-header">
                <h3 class="card-title">Tabel Permohonan</h3>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-hover-responsive">
                  <thead>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-default">
                      Tambah Data
                    </button>
                    <a href="permohonan/tambah" class="btn btn-outline-danger">ACC</a>
                  <tr>
                    <th>No</th>
                    <th>Nama Kegiatan</th>
                    <th>Lokasi</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Rincian</th>
                    <th>File Pendukung</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($permohonan as $no => $p)
                    <tr>
	                    <td>{{ $no +1 }}</td>
	                    <td>{{ $p->id_kegiatan }}</td>
	                    <td>{{ $p->lokasi }}</td>
	                    <td>{{ $p->tgl_mulai }}</td>
	                    <td>{{ $p->tgl_selesai }}</td>
	                    <td>{{ $p->rincian }}</td>
	                    <td>{{ $p->file_pendukung }}</td>
	                    
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
      <form action="/permohonan/tambah" method="get">
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Permohonan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Kegiatan</label>
                    <select class="form-control" name="kategori" id="kategori">
                        <option selected>---Pilih Kategori---</option>
                        @foreach ($kategori as $r_kab)
                        <option  value="{{$r_kab->nama_kategori}}">{{$r_kab->nama_kategori}}</option>
                         @endforeach
          </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" class="form-control" placeholder="Nama" required>
              </div><div class="form-group">
                <label for="exampleInputEmail1">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" class="form-control" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Rincian</label>
                <input type="text" name="rincian" class="form-control" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">File Pendukung</label>
                <input type="file" name="file_pendukung" class="form-control" placeholder="Nama" required>
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
@stop
