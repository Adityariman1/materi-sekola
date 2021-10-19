<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Barang</h1>
    @foreach($b as $data)
    <p>Id : {{$data->id_barang}} </p>
    <p>Nama Barang : {{$data->nama}} </p>
    <p>Varian : {{$data->varian}} </p>
    <p>Harga Beli : {{$data->harga_beli}} </p>
    <p>Harga Jual : {{$data->harga_jual}} </p>
    <hr>
    @endforeach
</body>
</html>