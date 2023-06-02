<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bengkel</title>
</head>
<body>
    <a href="{{ route('bengkel.create') }}">Tambah</a>
    <table border="1">
    <tr>
        <th>No Pesanan</th>
        <th>Nama Barang</th>
        <th>Jenis Barang</th>
        <th>Harga Barang</th>
        <th>Aksi</th>

    </tr>
    @foreach ($bengkel as $item )
    <tr>
        <td>{{ $item->no_pesanan}}</td>
        <td>{{ $item->nama_barang}}</td>
        <td>{{ $item->jenis_barang}}</td>
        <td>{{ $item->harga_barang}}</td>
        <td>
            <form action="{{ route('bengkel.destroy',$item->id) }}" method="POST">

                <a href="{{ route('bengkel.show',$item->id) }}">Tampil</a>

                <a href="{{ route('bengkel.edit',$item->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>

    @endforeach


    </table>
</body>
</html>
