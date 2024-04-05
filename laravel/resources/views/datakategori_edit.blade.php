@extends('adminlte::page')

@section('title', 'Data Kategori')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Ubah Kategori</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ubah Data Kategori :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @foreach($kategori as $p)
              <form action="/datakategori/rubah" method="post">
              {{ csrf_field() }}
      
            <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail">Nama Kategori</label>
              <input type="hidden" name="id_kategori" class="form-control" required value="{{ $p->id_kategori}}">
              <input type="text" name="nama_kategori" class="form-control" required value="{{ $p->nama_kategori}}">
            </div>
            <div class="modal-footer">
              <a href="/datakategori/" class="btn btn-default" >Close</a>
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