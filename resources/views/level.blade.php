<!DOCTYPE html>
<html>
    <head>
        <title>Data level pengguna</title>
    </head>
    <body>
        <h1>DATA LEVEL PENGGUNA</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{ $d->level_id}}</td>
                    <td>{{ $d->level_kode}}</td>
                    <td>{{ $d->level_nama}}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html>