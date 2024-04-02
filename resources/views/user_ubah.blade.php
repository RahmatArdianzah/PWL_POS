<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/PWL_POS/public/user">Kembali</a>
    <br><br>

    <form method="POST" action="/PWL_POS/public/user/ubah_simpan/{{ $data->user_id }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username" value="{{ $data->username }}">
        <br>
        <label>nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama" value="{{ $data->username }}">
        <br>
        <label>password</label>
        <input type="text" name="password" placeholder="Masukkan password" value="{{ $data->password }}">
        <br>
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level" value="{{ $data->level_id }}">
        <br><br>
        <input type="submit" name="btn btn-success" value="simpan">
    
    </form>
</body>
</html>