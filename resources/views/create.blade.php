<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            max-width: 480px;
            margin: 0 auto;
            color: white;
        }

        input {
            height: 40px;
            width: calc(100% - 40px);
            padding-left: 20px;
            border-radius: 10px;
            border: none;
        }
    </style>
</head>
<body>
    <br><br><br><br>
    <a href="{{route('getListBooks')}}">Kembali</a>
    <h1 style="color: black;">Tambah Buku</h1>
    <form style="background: blue; padding: 20px; border-radius: 10px;" action="{{route('storeBook')}}" method="post">
        @csrf

        <label for="id">Id</label><br>
        <input type="text" name="id" placeholder="Masukan id">
        <br><br>

        <label for="title">Title</label><br>
        <input type="text" name="title" placeholder="Masukan title">
        <br><br>

        <label for="author">Author</label><br>
        <input type="text" name="author" placeholder="Masukan author">
        <br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
