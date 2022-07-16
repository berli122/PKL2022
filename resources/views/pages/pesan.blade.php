<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <legend><h2>Pesanan</h2></legend>
    @if ($makan == null)
    <strong>{{ $makan }}</strong>
    @elseif ($makan == 'mie goreng')
        Makanan : <strong>{{ $makan }}</strong> <br>
        Harga : Rp. 5000
    @elseif ($makan == 'seblak')
        Makanan : <strong>{{ $makan }}</strong> <br>
        Harga : Rp. 7500
    @elseif ($makan == 'nasi padang')
        Makanan : <strong>{{ $makan }}</strong> <br>
        Harga : Rp. 10000
    @endif

    <br>

    @if ($minum == null)
    <strong>{{ $minum }}</strong>
    @elseif ($minum == 'teh')
        Makanan : <strong>{{ $minum }}</strong> <br>
        Harga : Rp. 5000
    @elseif ($minum == 'kopi')
        Makanan : <strong>{{ $minum }}</strong> <br>
        Harga : Rp. 7500
    @elseif ($minum == 'jus')
        Makanan : <strong>{{ $minum }}</strong> <br>
        Harga : Rp. 10000
    @endif

    <br>

    @if ($porsi == null)
    <strong>{{ $porsi }}</strong>
    @elseif ($porsi == 'kecil')
        Makanan : <strong>{{ $porsi }}</strong> <br>
        Harga : Rp. 5000
    @elseif ($porsi == 'sedang')
        Makanan : <strong>{{ $porsi }}</strong> <br>
        Harga : Rp. 7500
    @elseif ($porsi == 'besar')
        Makanan : <strong>{{ $porsi }}</strong> <br>
        Harga : Rp. 10000
    @endif

      
</body>
</html>