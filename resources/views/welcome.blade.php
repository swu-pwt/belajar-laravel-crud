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
        }
    </style>
</head>
<body>
    <h1>Bukukuh</h1>
    <p>Buku Paling Bagus Se-Purwokerto</p>
    <a href="{{route('createBook')}}">
        <button>Tambah Buku</button>
    </a>
    <br><br>
    @foreach ($data as $item)
        <div style="background: blue; color: white;
            padding: 20px; margin-bottom: 20px; border-radius: 20px;">
            <h1>{{$item->title}}</h1>
            <h1>{{$item->author}}</h1>
            <h1>{{$item->id}}</h1>
            <a href="{{route('editBook', $item->id)}}">
                <button>Ubah</button>
            </a>
            <a href="{{route('destroyBook', $item->id)}}">
                <button>Hapus</button>
            </a>
        </div>
    @endforeach
</body>
</html>
