<!DOCTYPE html>
<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>DATA User</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <!--
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
        -->
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level</th>
            </tr>
            <tr>
                <td>{{ $data->user_id}}</td>
                <td>{{ $data->username}}</td>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->level_id}}</td>
                
            </tr>
            <!--
            <tr>
                <td>{{ $data->level_id}}</td>
            </tr>
        -->
            
        </table>
    </body>
</html>