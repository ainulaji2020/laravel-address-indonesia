<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('/citys/store') }}" method="post">
        @csrf
        <label for="fname">Nama Provinsi:</label>
        {{-- <input type="text" id="fname" name="name_province"><br><br> --}}
        <select name="province_id">
            @foreach ($provinces as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
            @endforeach
        </select><br/><br/>
        <label for="fname">Nama Citys :</label>
        <input type="text" id="fname" name="name"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
