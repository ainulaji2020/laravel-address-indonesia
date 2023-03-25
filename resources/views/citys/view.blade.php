<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #DDD;
        }

        tr:hover {
            background-color: #D6EEEE;
        }
        td a{
            text-decoration:none;
        }
    </style>
</head>

<body>

    <h2>Halaman Citys</h2>

    <a style="margin-bottom: 5px;" href="{{ url('/citys/create') }}">Tambah Data</a>
    <table>
        <tr>
            <th>Nama Citys </th>
            <th>Nama Provinsi </th>
            <th>Aksi</th>
        </tr>
        @foreach ($citys as $data)
        <tr>
            <td>{{ $data->name}}</td>
            <td>{{ $data->provinces->name }}</td>
            <td>
                <a href="{{ url('/citys/delete'). '/' . $data->id  }}">Delete</a>
                <a href="{{ url('/citys/detail'). '/' . $data->id }}">Detail</a>
                <a href="{{ url('/citys/edit'). '/' . $data->id }}">Ubah</a>
            </td>
        </tr>
        @endforeach

    </table>

</body>

</html>
