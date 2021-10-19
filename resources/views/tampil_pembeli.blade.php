<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Pembeli</h1>
    @foreach($p as $data)
    <p>Id : {{$data->id_pembeli}} </p>
    <p>Nama : {{$data->nama}} </p>
    <p>Jenis Kelamin : {{$data->jns_kelamin}} </p>
    <p>Alamat : {{$data->alamat}} </p>
    <p>Kode Pos : {{$data->kode_pos}} </p>
    <p>Kota : {{$data->kota}} </p>
    <p>Tanggal Lahir : {{$data->tgl_lahir}} </p>
    <hr>
    @endforeach
</body>
</html>