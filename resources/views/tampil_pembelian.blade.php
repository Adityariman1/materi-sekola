<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Pembelian</h1>
    @foreach($p as $data)
    <p>Id : {{$data->id_pembelian}} </p>
    <p>Nama Barang : {{$data->nama_barang}} </p>
    <p>Nama Suplier : {{$data->nama_suplier}} </p>
    <p>Quality : {{$data->qty}} </p>
    <p>Tanggal : {{$data->tgl}} </p>
    <hr>
    @endforeach
</body>
</html>