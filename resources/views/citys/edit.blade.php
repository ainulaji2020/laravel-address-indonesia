<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('/citys/update').'/'.$city->id }}" method="post">
        @csrf
        @method('put')
        <label for="fname">Nama Provinsi:</label>
        {{-- <input type="text" id="fname" name="name_province"><br><br> --}}
        <select name="province_id">
            <option value="{{ $city->provinces->id }}">{{ $city->provinces->name }}</option>
            @foreach ($provinces as $province)
                @if ($province->name != $city->provinces->name)
                    <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endif
            @endforeach
        </select><br /><br />
        <label for="fname">Nama Citys :</label>
        <input type="text" id="fname" name="name" value="{{ $city->name }}"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
