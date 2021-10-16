<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Biodata</h1></center>
    <hr>
    @foreach ($query as $item)
    <p>Name : {{$item->name}} <br>
    Born Date : {{$item->borndate}} <br>
    Gender : {{$item->gender}} <br>
    Address : {{$item->address}} <br>
    Religion : {{$item->religion}} <br>
    Age : {{$item->age}} <br>
    Hobby : {{$item->hobby}}</p>
    <hr>
    @endforeach
</body>
</html>