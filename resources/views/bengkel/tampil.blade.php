<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tampil</title>
</head>
<body>
    <form >
        <fieldset>
            <legend>TAMBAH</legend>
            <p>
                <label>No Pesananan:</label>
                <input type="text" name="no_pesanan" value="{{ $bengkel->no_pesanan }}" placeholder="isi no pesanan..." />
            </p>
            <p>
                <label>Nama Barang:</label>
                <input type="text" name="nama_barang" value="{{ $bengkel->nama_barang }}" placeholder="isi nama barang..." />
            </p>
            <p>
                <label>Jenis Barang:</label>
                <input type="text" name="jenis_barang" value="{{ $bengkel->jenis_barang }}" placeholder="isi jenis barang..." />
            </p>
            <p>
                <label>Harga Barang:</label>
                <input type="text" name="harga_barang" value="{{ $bengkel->harga_barang }}" placeholder="isi harga barang..." />
            </p>
            <p>
                <a href="{{ route('bengkel.index') }}">Kembali</a>
            </p>
            </fieldset>

    </form>

</body>
</html>
