<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
</head>
<body>
    <h1> Daftar Pegawai </h1>
    <style> h1 { text-align: center; } </style>
    <table class="table table-bordered">
        <thead width="5px" class="text-center thead-dark">
            <tr>
                <th class="align-middle" scope="col">No.</th>
                <th class="align-middle" scope="col">Nama</th>
                <th class="align-middle" scope="col">NIP</th>
                <th class="align-middle" scope="col">Jabatan</th>
                <th class="align-middle" scope="col">Golongan</th>
                <th class="align-middle" scope="col">Eselon</th>
            </tr>    
        </thead>
        <tbody>
            <?php $no = 1 ;?>
            @foreach ($pegawai as $p)
            <tr>
            <td id="center">{{ $no++ }}</td>
            <td>{{ $p->p_nama }}</td>
            <td id="center">{{ $p->p_nip }}</td>
            <td>{{ $p->p_jabatan }}</td>
            <td id="center">{{ $p->p_golongan }}</td>
            <td id="center">{{ $p->p_eselon }}</td>
            <style> #center { text-align: center; } </style>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>