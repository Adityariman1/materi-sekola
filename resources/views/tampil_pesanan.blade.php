<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Pesanan</h1>
    @foreach($p as $data)
    <p>Id : {{$data->id_pesanan}} </p>
    <p>Nama Pelanggan : {{$data->nama_pelanggan}} </p>
    <p>Nama Barang : {{$data->nama_barang}} </p>
    <p>Quality : {{$data->qty}} </p>
    <p>Tanggal Pesan : {{$data->tgl_pesan}} </p>
    <hr>
    @endforeach
</body>
</html>