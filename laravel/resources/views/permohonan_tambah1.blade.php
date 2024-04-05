@extends('adminlte::page')

@section('title', 'Pengajuan Permohonan baru')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Pengajuan Permohonan Baru :</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Isi form berikut :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
            <div class="modal-body">
              <form action="/permohonan/simpan" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}          
              
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Kegiatan</label>
                <input type="hidden" name="nim" class="form-control"  value="{{Auth::user()->nim}}">
                    <select class="form-control" name="id_kegiatan" id="id_kegiatan">
                        <option selected>---Pilih kegiatan---</option>
                        @foreach ($kegiatan as $r_kab)
                          <option  value="{{$r_kab->id_kegiatan}}">{{ $r_kab->point }} || {{$r_kab->nama_kegiatan}}</option>
                         @endforeach
                    </select>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" placeholder="Lokasi Kegiatan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Mulai</label>
                <input type="date" name="tgl_mulai" class="form-control" required>
              </div><div class="form-group">
                <label for="exampleInputEmail1">Tanggal Selesai</label>
                <input type="date" name="tgl_selesai" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Rincian</label>
                <input type="text" name="rincian" class="form-control" placeholder="Rincian Kegiatan" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">File Pendukung</label>
                <input type="file" name="file" class="form-control" accept="application/pdf" required>
                <code>Lampiran berupa salah satu dari Sertifikat, Surat Tugas, SK organisasi, SK dari instansi terkait, dan Bukti hasil karya dan link publikasi dalam bentuk .pdf
                </code>
              </div>
            <div class="modal-footer">
              <a href="/permohonan/tambah" class="btn btn-default" >Kembali</a>
              <button type="submit" class="btn btn-primary">Kirim</button>
            </div>
            </form> 
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
@stop