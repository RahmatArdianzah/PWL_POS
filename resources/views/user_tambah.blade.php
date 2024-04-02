<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Form Tambah Data User
    </h1>
    <form method="post" action="/PWL_POS/public/user/tambah_simpan">
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>password</label>
        <input type="text" name="password" placeholder="Masukkan password">
        <br>
        <label>Level ID</label>
        <input type="text" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" name="btn btn-success" value="simpan">
    </form>
</body>
</html>