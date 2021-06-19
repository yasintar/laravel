@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="card-header">
                <h5 class="card-title"><strong> {{ $pegawai->p_nama }} </strong></h5>
                <h6 class="card-subtitle mb-2 text-muted"><strong>NIP. {{ $pegawai->p_nip }} </strong></h6>
            </div>
        </div>
            
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <p class="card-text"><strong>Nama:</strong> </br> {{ $pegawai->p_nama }}</p>
                        <p class="card-text"><strong>Alamat:</strong> </br> {{ $pegawai->p_alamat }}</p>
                        <p class="card-text"><strong>Jenis Kelamin:</strong> </br> {{ $pegawai->p_gender }}</p>
                        <p class="card-text"><strong>Tempat, Tanggal Lahir:</strong> </br> {{ $pegawai->p_tplahir }}, {{ date('d M Y', strtotime($pegawai->p_tglahir)) }} </p>
                        <p class="card-text"><strong>Agama:</strong> </br> {{ $pegawai->p_agama }}</p>
						<p class="card-text"><strong>Nomor Telepon:</strong> </br> {{ $pegawai->p_nohp }}</p>
                        
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <div class="card-body">
                        <p class="card-text"><strong>NIP:</strong> </br> {{ $pegawai->p_nip }}</p>
                        <p class="card-text"><strong>Jabatan / Eselon:</strong> </br> {{ $pegawai->p_jabatan }} / {{ $pegawai->p_eselon }}</p>
						<p class="card-text"><strong>Golongan:</strong> </br> {{ $pegawai->p_golongan }}</p>
                        <p class="card-text"><strong>Unit Kerja:</strong> </br> {{ $pegawai->p_ukerja }}</p>
                        <p class="card-text"><strong>Tempat Tugas:</strong> </br> {{ $pegawai->p_tptugas }}</p>
						<p class="card-text"><strong>NPWP:</strong> </br> {{ $pegawai->p_npwp }}</p>
                        
                    </div>
                    </div>
                </div>
            </div>    
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 my-4">
                    <a href="/home" class="btn btn-secondary btn-sm">Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
