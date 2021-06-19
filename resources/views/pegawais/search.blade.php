@extends('layouts.app')

@section('content')
    <div class="container">  
        <form class="form" method="GET" action="/search">
            <div class="form-group w-100 mb-3">
                <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Nama Pegawai">
                <button type="submit" class="btn btn-dark mb-1">Cari</button>
            </div>
        </form>

    </div>

    <div class="container">
            <a href=" pegawais/create " class="btn btn-primary btn-sm">Tambah Data Pegawai</a>
            <a href="{{ route('print')}}" target="_blank" class="btn btn-sm btn-info">Cetak</a>
            @if (session('status'))
            <div class="alert alert-success alert-block my-3" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ session('status') }}</strong>
            </div>
            @endif
    </div>
    
    <div class="container">
        <div class="row">
                <div class="table-responsive">    
                    <table class="table table-sm table-bordered table-striped table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="align-middle" scope="col">Nama</th>
                                <th class="align-middle" scope="col">NIP</th>
                                <th class="align-middle" scope="col">Jabatan</th>
                                <th class="align-middle" scope="col">Golongan</th>
                                <th class="align-middle" scope="col">Eselon</th>
                                <th class="align-middle" scope="col">Pilihan</th>
                                <style> th { text-align: center; } </style>
                            </tr>    
                        </thead>
                        <tbody>
                            @foreach ($pegawai as $p)
                            <tr>
                            <td>{{ $p->p_nama }}</td>
                            <td>{{ $p->p_nip }}</td>                           
                            <td>{{ $p->p_jabatan }}</td>
                            <td>{{ $p->p_golongan }}</td>
                            <td>{{ $p->p_eselon }}</td>
                            <td>
                            <a href=" pegawais/{{ $p->p_id }}/edit " class="btn btn-warning btn-sm">Edit</a>

                            <form action="pegawais/{{ $p->p_id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>

                            <a href=" pegawais/{{ $p->p_id }} " class="btn btn-info btn-sm">Detail</a>
                            </td>
                            <style> td { text-align: center; } </style>
                            </tr>
                            @endforeach
                        </tbody>
                        <br/>
                    </table>
                    {{ $pegawai->links() }}
                </div>
        </div>
    </div>


@endsection
