<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>
    <table>
    <h1>Biodata</h1>
    <tr>
        <td>Nama Saya</td>
        <td> : </td>
        <td>{{ $nama }}</td>
    </tr>
    <tr>
        <td>Kelas Saya</td>
        <td> : </td>
        <td>{{ $kelas }}</td>
    </tr>
    <tr>
        <td>Umur Saya</td>
        <td> : </td>
        <td>{{ $umur }}</td>
    </tr>
    <tr>
        <td>Alamat Saya</td>
        <td> : </td>
        <td>{{ $alamat }}</td>
    </tr>
    </table>
</body>
</html>