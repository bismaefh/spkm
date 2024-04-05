@extends('adminlte::page')

@section('title', 'Data Kegiatan')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Ubah Kegiatan</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Kegiatan :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @foreach($kegiatan as $p)
              <form action="/datakegiatan/rubah" method="post">
              {{ csrf_field() }}

              <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Kategori</label>
                <select name="id_kategori" class="custom-select form-control-border" id="exampleSelectBorder" required value="{{ $p->id_kategori}}">
                  <option selected value="{{ $p->id_kategori}} ">Pilih Kategori</option>
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
                <input type="hidden" name="id_kegiatan" class="form-control" required value="{{ $p->id_kegiatan}}">
                <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama" required value="{{ $p->nama_kegiatan}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Poin</label>
                <input type="number" name="point" class="form-control" placeholder="Nama" required min="1" max="100" value="{{ $p->point}}">
              </div>
              <div class="modal-footer">
                <a href="/datakegiatan/" class="btn btn-default" >Close</a>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
             @endforeach
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