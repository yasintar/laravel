@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <h5 class=" mt-3"><strong> Form Ubah Data Pegawai </strong></h5>
                <form method="POST" action="/pegawais/{{ $pegawai->p_id }}">
                    @csrf
                    @method('put')
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control @error('p_nama') is-invalid @enderror " id="nama" placeholder="Nama" name="p_nama" value="{{ $pegawai->p_nama }}">
                                @error('p_nama')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama" class="form-label">NIP</label>
                                <input type="text" class="form-control @error('p_nip') is-invalid @enderror" id="nip" placeholder="NIP" name="p_nip" value="{{ $pegawai->p_nip }}">
                                @error('p_nip')
                                <div class="invalid-feedback">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                    </div>  

                    <div class="row">
                        <div class="col-sm-6">   
                            <div class="form-group">
                                <label for="tplahir" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control @error('p_tplahir') is-invalid @enderror" id="tplahir" placeholder="Tempat Lahir" name="p_tplahir" value="{{ $pegawai->p_tplahir }}">
                            </div>
                        </div>
                        <div class="col-sm-6">   
                            <div class="form-group">
                                <label for="tglahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control @error('p_tglahir') is-invalid @enderror" id="tglahir" placeholder="Tanggal Lahir" name="p_tglahir" value="{{ $pegawai->p_tglahir }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="gender" class="form-label">Jenis Kelamin</label>
                                <input type="text" class="form-control @error('p_gender') is-invalid @enderror" id="gender" placeholder="L / P" name="p_gender" value="{{ $pegawai->p_gender }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control @error('p_alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" name="p_alamat" value="{{ $pegawai->p_alamat }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="agama" class="form-label">Agama</label>
                                <input type="text" class="form-control @error('p_agama') is-invalid @enderror" id="agama" placeholder="Agama" name="p_agama" value="{{ $pegawai->p_agama }}">
                            </div>
                        </div>
                        <div class="col-sm-6">    
                            <div class="form-group">
                                <label for="nohp" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control @error('p_nohp') is-invalid @enderror" id="nohp" placeholder="Nomor Telepon" name="p_nohp" value="{{ $pegawai->p_nohp }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="npwp" class="form-label">NPWP</label>
                                <input type="text" class="form-control @error('p_npwp') is-invalid @enderror" id="npwp" placeholder="NPWP" name="p_npwp" value="{{ $pegawai->p_npwp }}">
                            </div>
                        </div>
                        <div class="col-sm-6">   
                            <div class="form-group">
                                <label for="jabatan" class="form-label">Jabatan</label>
                                <input type="text" class="form-control @error('p_jabatan') is-invalid @enderror" id="jabatan" placeholder="Jabatan" name="p_jabatan" value="{{ $pegawai->p_jabatan }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="golongan" class="form-label">Golongan</label>
                                <input type="text" class="form-control @error('p_golongan') is-invalid @enderror" id="golongan" placeholder="Golongan" name="p_golongan" value="{{ $pegawai->p_golongan }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="eselon" class="form-label">Eselon</label>
                                <input type="text" class="form-control @error('p_eselon') is-invalid @enderror" id="eselon" placeholder="Eselon" name="p_eselon" value="{{ $pegawai->p_eselon }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tptugas" class="form-label">Tempat Tugas</label>
                                <input type="text" class="form-control @error('p_tptugas') is-invalid @enderror" id="tptugas" placeholder="Tempat Tugas" name="p_tptugas" value="{{ $pegawai->p_tptugas }}">
                            </div>
                        </div>
                        <div class="col-sm-6">    
                            <div class="form-group">
                                <label for="ukerja" class="form-label">Unit Kerja</label>
                                <input type="text" class="form-control @error('p_ukerja') is-invalid @enderror" id="ukerja" placeholder="Unit Kerja" name="p_ukerja" value="{{ $pegawai->p_ukerja }}">
                            </div>
                        </div>
                    </div>
                    
                    <a href="/home" class="btn btn-secondary btn-sm">Kembali</a>
                    <button type="submit" class="btn btn-primary btn-sm">Ubah</button>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div> 
                    @endif
                    
                </form>
            </div>
        </div>
    </div>
            
   
@endsection
