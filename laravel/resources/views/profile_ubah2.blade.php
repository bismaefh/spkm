@extends('adminlte::page')

@section('title', 'Ubah Profile')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Ubah Profile anda :</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Profile</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              @foreach($kemahasiswaan as $p)
              <form action="/profile/rubah" method="post">
              {{ csrf_field() }}
      
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" required value="{{ $p->name}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">No Telepon</label>
                <input type="number" name="telp" class="form-control" placeholder="Nama" required value="{{ $p->telp}}">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Lahir</label>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Nama" required value="{{ $p->tgl_lahir}}">
              </div>
            <div class="modal-footer">
              <a href="/home" class="btn btn-default" >Close</a>
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