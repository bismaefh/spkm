@extends('adminlte::page')

@section('title', 'Cetak Data')

@section('content_header')
<h1></h1>
@stop

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card  bg-gradient-primary">
        <div class="card-body">
            <h2 class="card-title text-white text-center mt-2">Sertifikat Laporan</h2>
        </div>
    </div>
</div>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tampilan Cetak Sertifikat Laporan :</h3>
                <a href="/permohonan/cetak_pdf" target="_blank" class="btn btn-primary float-right">Cetak Laporan</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table width="950" align="center" border="0">
			<tr>
				<td width="50px"></td>
				<td width="100px"><center><img src=" {{asset('/logo.png')}}" width="107px" height="107px" /></center></td>
				<td colspan="3">
        <center>
						<font size="5">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN<br>
						RISET DAN TEKNOLOGI<br>
						<B>UNIVERSITAS JENDERAL SOEDIRMAN<br>FAKULTAS TEKNIK</B></font><br>
						<font size="3">Jalan Mayor Jenderal Sungkono KM 05 Blater Purbalingga 53371<br>Telp. (0281) 6596700, Faks. (0281) 6596801<br>Laman : ft.unsoed.ac.id E-mail : ft@unsoed.ac.id</font>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<hr><center><font size="5"><b>DATA MAHASISWA</b></font></center>
				</td>
			</tr>  
		</table><br>
		@foreach($mahasiswa as $no => $p)
		<table width="950" align="center" border="0">
			<tr>
				<font size="3"><td width="20%" align="top">Nomer Induk Mahasiswa<br></td><td width="1%">:<br></td><td width="50%">{{ $p->nim }}<br></td>
					<td width="29%" rowspan="8"><img src="{{asset('profile/'.$p->profile )}}" width="140" height="200px" /></td>
				</font>
			</tr>
			<tr>
				<font size="3">
					<td width="20%" align="top">Jurusan<br></td><td width="1%">:<br></td><td width="50%">{{ $p->jurusan }}<br></td>
				</font>
			</tr>
			<tr>
				<font size="3">
					<td width="20%" align="top">Angkatan<br></td><td width="1%">:<br></td><td width="50%">{{ $p->angkatan }}<br></td>
				</font>
			</tr>
			<tr>
				<font size="3">
				<td width="20%" align="top">Nama Lengkap<br></td><td width="1%">:<br></td><td width="50%">{{ $p->name }}<br></td>
				</font>
			</tr>
			<tr>
				<font size="3">
				<td width="20%" align="top">Tanggal Lahir<br></td><td width="1%">:<br></td><td width="50%">{{ $p->tgl_lahir }}<br></td>
				</font>
			</tr>
			<tr>
				<font size="3">
				<td width="20%" align="top">Jenis Kelamin<br></td><td width="1%">:<br></td><td width="50%">{{ $p->jenis_kelamin }}<br></td>
				</font>
			</tr>
			<tr>
				<font size="3">
				<td width="20%" align="top">Email<br></td><td width="1%">:<br></td><td width="50%">{{ $p->email }}<br></td>
				</font>
			</tr>
			<tr>
				<font size="3">
				<td width="20%" align="top">No Telepon<br></td><td width="1%">:<br></td><td width="50%">{{ $p->telp }}<br></td>
				</font>
			</tr>
			
		</table><br><br>
		@endforeach
		<table width="950" align="center" border="0">
			<tr>
				<td colspan="4">
					<center><font size="5"><b>DETAIL POIN MAHASISWA<br><br></b></font></center>
				</td>
			</tr> 
			<tr>
				<font size="3">
					<td width="30%" align="top">Permohonan Kredit Poin</td><td width="1%">:</td><td>{{ $datapoint }}</td>
				</font>
			</tr>
			<tr>
				<font size="3">
					<td width="30%" align="top">Jumlah Permohonan Kredit Poin</td><td width="1%">:</td><td>{{ $datatotal }} Permohonan</td>
				</font>
			</tr>
		</table><br><br>
		<table width="750px" align="center" border="5">
			<tr>
				<td colspan="4">
					<center><font size="5"><b>TOTAL POIN = {{ $datapoint }}</b></font></center>
				</td>
			</tr>
		</table><br><br>
		<table  width="850" align="center" border="0">
			<tr>
				<td width="425px">
					<center><font size="4">
						Menyetujui,<br>
						<b>Wakil Dekan<b><br>
						<b>Bidang Kemahasiswaan dan Alumni<b><br>
						<br><br><br><br>
						@foreach($pejabat1 as $no => $p)
						<b>{{ $p->nama }}<b><br>
						<b>NIP. {{ $p->nip }}<b><br>
						@endforeach
					</font></center>
				</td>
				<td width="425px">
					<center><font size="4">
						Mengetahui,<br>
						<b>Presiden BEM<b><br>
						<br><br><br><br><br>
						@foreach($pejabat2 as $no => $p)
						<b>{{ $p->nama }}<b><br>
						<b>NIM. {{ $p->nip }}<b><br>
						@endforeach
					</font></center>
				</td>
			</tr>
		</table>
		<br><br><br><br><hr>
		
		<!-- Page Ke dua ------------------------------------------------------------------------------------------------------------------------------------>
		<table width="950" align="center" border="0">
			<tr>
				<td width="50px"></td>
				<td width="100px"><center><img src="{{asset('/logo.png')}}" width="96px" height="107px" /></center></td>
				<td colspan="3">
					<center>
					<font size="5">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN<br>
						RISET DAN TEKNOLOGI<br>
						<B>UNIVERSITAS JENDERAL SOEDIRMAN<br>FAKULTAS TEKNIK</B></font><br>
						<font size="3">Jalan Mayor Jenderal Sungkono KM 05 Blater Purbalingga 53371<br>Telp. (0281) 6596700, Faks. (0281) 6596801<br>Laman : ft.unsoed.ac.id E-mail : ft@unsoed.ac.id</font>
					</center>
				</td>
			</tr>
			<tr>
				<td colspan="4">
					<hr><center><font size="5"><b>DAFTAR KREDIT POIN</b></font></center>
				</td>
			</tr>  
		</table><br>
		<table width="850" align="center" border="1">
			<tr>
				<font size="3" >
					<td width="2%" align="center">NO</td>
					<td width="10%" align="center">TANGGAL</td>
					<td width="15%" align="center">NO PERMOHONAN</td>
					<td width="45%" align="center">KEGIATAN</td>
					<td width="10%" align="center">POIN</td>
				</font>
			</tr>
			@foreach($permohonan as $no => $p)
			<tr>
				<font size="3" >
					<td width="2%" align="center">{{ $no +1 }}</td>
					<td width="2%" align="center">{{ $p->tgl_mulai }}</td>
					<td width="10%" align="center">{{ $p->no_permohonan }}</td>
					<td width="15%" align="center">{{ $p->nama_kegiatan }}</td>
					<td width="10%" align="center">{{ $p->point }}</td>
				</font>
			</tr>
			@endforeach
		</table><br><br>
		


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