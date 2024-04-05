@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="col-12 stretch-card">
    <div class="card bg-gradient-white" style="height: 100px;">
        <div class="card-body">
            <h4 class="welcome">Selamat Datang, <b>{{Auth::user()->name}}</b>!  </h4>
        </div>
    </div>
</div>

@if(Auth::user()->role=="mahasiswa")
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dashboard Mahasiswa :</h3>
        </div>
        @foreach($mahasiswa as $no => $p)
        <div class="card-body">
            <div class="row margin">
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src=" {{asset('profile/'.$p->profile )}}" width="fix" height="200px"
                                    alt="User profile picture" >
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td> <b>NIM</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->nim }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Nama</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->name }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Angkatan</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->angkatan }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Jurusan</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->jurusan }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Email</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->email }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Jenis Kelamin</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->jenis_kelamin }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Telepon</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->telp }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Tanggal Lahir</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->tgl_lahir }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Alamat</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->alamat }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="/profile/edit/{{ $p->nim }}" class="btn btn-primary btn-block"><b>Ubah Profil Anda</b></a>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <a href="/permohonan/masuk" class="btn btn-primary btn-block">
                                <b>TOTAL POIN ANDA</b>
                                <center><font size="7" color="yellow"><b>{{ $datatotal }}</b></font></center>  
                            </a>
                            <a href="/permohonan/cetak" class="btn btn-danger btn-block">
                                <center><font size="4" color="white"><b>CETAK SERTIFIKAT</b></font></center>
                            </a>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Pengajuan Permohonan Baru</p></center>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-edit"></i>
                                </div>
                                <a href="/permohonan/tambah" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Riwayat Permohonan</p></center>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-history"></i>
                                </div>
                                <a href="/permohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@elseif(Auth::user()->role=="admin")
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dashboard Admin :</h3>
        </div>
        <div class="card-body">
            <div class="row margin">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Daftar Permohonan Mahasiswa</p></center>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-check-square"></i>
                                </div>
                                <a href="/listpermohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Pejabat</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <a href="/datapejabat" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Kategori</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-bookmark"></i>
                            </div>
                            <a href="/datakategori" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Kegiatan</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-folder"></i>
                            </div>
                            <a href="/datakegiatan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@elseif(Auth::user()->role=="kemahasiswaan")
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dashboard Kemahasiswaan :</h3>
        </div>
        @foreach($kemahasiswaan as $no => $p)
        <div class="card-body">
            <div class="row margin">
            <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src=" {{asset('profile/'.$p->profile )}}" width="fix" height="200px"
                                    alt="User profile picture" >
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td> <b>NIP</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->nim }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Nama</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->name }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Email</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->email }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Telepon</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->telp }}</td>
                                        </tr>
                                        <tr>
                                            <td> <b>Tanggal Lahir</b></td>
                                            <td> <b>:</b> </td>
                                            <td>{{ $p->tgl_lahir }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="/profile2/edit/{{ $p->nim }}" class="btn btn-primary btn-block"><b>Ubah Profil Anda</b></a>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-12">
                        <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Daftar Permohonan Mahasiswa</p></center>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-check-square"></i>
                                </div>
                                <a href="/listpermohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Admin</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <a href="/dataadmin" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Mahasiswa</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <a href="/datamahasiswa" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Pejabat</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <a href="/datapejabat" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Kategori</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-bookmark"></i>
                            </div>
                            <a href="/datakategori" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Kegiatan</p></center>
                                </div>
                            <div class="icon">
                                <i class="fa fa-folder"></i>
                            </div>
                            <a href="/datakegiatan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="col-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Dashboard :</h3>
        </div>
        <div class="card-body">
            <div class="row margin">
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img src=" {{asset('profile/default.jpg')}}" width="fix" height="200px"
                                    alt="User profile picture">
                            </div>
                            
                            <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                            NIM : <b></b>
                            </li>
                            <li class="list-group-item">
                            Nama : <b></b>
                            </li>
                            <li class="list-group-item">
                            Angkatan : <b></b>
                            </li>
                            <li class="list-group-item">
                            Jurusan : <b></b>
                            </li>
                            <li class="list-group-item">
                            Email : <b></b>
                            </li>
                            <li class="list-group-item">
                            Jenis Kelamin : <b></b>
                            </li>
                            <li class="list-group-item">
                            No Telepon : <b></b>
                            </li>
                            <li class="list-group-item">
                            Tanggal Lahir : <b></b>
                            </li>
                            <li class="list-group-item">
                            Alamat : <b></b>
                            </li>
                            <a href="#" class="btn btn-primary btn-block"><b>Ubah Profil Anda</b></a>
                        </div>
                    </div> 
                </div>
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <a href="/permohonan/masuk" class="btn btn-primary btn-block">
                                <b>TOTAL POIN ANDA</b>
                                <center><font size="7" color="yellow"><b>{{ $datatotal }}<b></font></center>  
                            </a>
                            <a href="/permohonan/cetak" class="btn btn-warning btn-block">
                                <center><font size="4" color="white"><b>CETAK SERTIFIKAT<b></font></center>
                            </a>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Pengajuan Permohonan Baru</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/permohonan/tambah" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Riwayat Permohonan</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/permohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                        <!-- small box -->
                            <div class="small-box bg-primary">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Daftar Permohonan Mahasiswa</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="/listpermohonan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Admin</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/dataadmin" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Mahasiswa</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/datamahasiswa" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-4">
                        <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Pejabat</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/datapejabat" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Kategori</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/datakategori" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3></h3>
                                    <center><p>Data Kegiatan</p></center>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="/datakegiatan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.from('.welcome', {duration:2, text:'Selamat Datang,'});
    </script>
@stop