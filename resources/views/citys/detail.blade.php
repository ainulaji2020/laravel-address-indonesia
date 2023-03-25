<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Halaman Detail </h1>
    <div>
        <label for="">Nama Provinsi  :</label>
        <label for="">{{ $detail->name }}</label><br/>
        <label for="">Nama citys  :</label>
        <label for="">{{ $detail->provinces->name }}</label>
    </div>
</body>

</html>
