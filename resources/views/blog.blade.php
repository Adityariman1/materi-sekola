<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <h2>Tampilkan Data</h2>
    <ul>
        @foreach ($data as $data2)
    <tr>
        <td>Id</td>
        <td>:</td>
        <td>{{$data2['id']}} </td>
    </tr>
    <tr>
        <td>Title</td>
        <td>:</td>
        <td>{{$data2['title']}}</td>
    </tr>
    <tr>
        <td>Content</td>
        <td>:</td>
        <td>{{$data2['content']}}</td>
    </tr>
        
        @endforeach
    </ul>

    </table>
</body>
</html>