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
    <center><h1>BIODATA</h1></center>
    
    @foreach ($query as $item)
    <p style="border: 3px solid DodgerBlue;">
    Name : {{$item->name}} <br>
    Born Date : {{$item->borndate}} <br>
    Gender : {{$item->gender}} <br>
    Address : {{$item->address}} <br>
    Religion : {{$item->religion}} <br>
    Age : {{$item->age}} <br>
    Hobby : {{$item->hobby}}</p>
    
    @endforeach
</body>
</html>