<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
    <legend>BELANJA</legend>
    @foreach ($belanja as $belanja)
<br>
    ------------------ <br>
    
    NAMA PEMBELI : {{ $belanja['nama_orang'] }} <br>
    ------------------
    <?php $total = 0; ?>
    @foreach ($belanja['pembelian'] as $item)
    <ul>
        <li>JENIS  {{$item['jenis'] }}</li>
    </ul>
    Merk : {{$item['merk'] }}<br>
    Harga :{{$item['harga'] }} <br>
    
    <?php $total += $item['harga'] ?>
    Total Harga : {{$total}} <br>

    @if($total < 250000 && $total < 500000)
        @php 
            $cashback = $total * (5/100);
        @endphp
    @elseif($total > 500000)
        @php
            $cashback = $total * (10/100);
        @endphp
    @endif
    
    @endforeach
    <hr>
    Cashback : {{ $cashback }} <br>
    Bayar : {{ $total - $cashback}}
    <hr>
    @endforeach
        
   
   
    </fieldset>
    
</body>
</html>
