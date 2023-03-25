<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/provinsi/store') }}" method="post">
        @csrf
        <label for="fname">Nama Provinsi:</label>
        <input type="text" id="fname" name="name_province"><br><br>
        <input type="submit" value="Submit">
      </form>
</body>
</html>