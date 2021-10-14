<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tampilan Data Siswa</h2>
    @foreach ($data as $isi)
    NIS : {{$isi['nis']}} <br>
    Nama : {{$isi['nama']}} <br> 
    Jenis Kelamin : {{$isi['jk']}} <br>
    Jurusan : {{$isi['jurusan']}} <br>
    Kelas : {{$isi['kelas']}} <br>
    Wali Kelas : {{$isi['walikelas']}} <br>
    <hr>
    @endforeach
</body>
</html>