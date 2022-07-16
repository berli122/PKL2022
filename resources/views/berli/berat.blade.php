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
        <legend>
            Berat Badan
        </legend>

<!-- Cara Kuno -->

    @if($status <= 17) 
        Berat : {{$berat}} <br>
        Tinggi : {{$tinggi}} <br>
        Status : {{$bmi}} <br>
        Umur : {{$umur}} <br>   
        Status Berat Badan : {{$status}}
    @elseif($status >= 17 && $status <= 18.4) 
        Berat : {{$berat}} <br>
        Tinggi : {{$tinggi}} <br>
        Status : {{$status}} <br>
        Umur : {{$umur}} <br>
        Status Berat Badan : {{$statusbadan = "Kurus, Kurang Berat Badan"}}
    @elseif($status >= 18.5 && $status <= 25) 
        Berat : {{$berat}} <br>
        Tinggi : {{$tinggi}} <br>
        Status : {{$status}} <br>
        Umur : {{$umur}} <br>
        Status Berat Badan : {{$statusbadan = "Normal"}}
    @elseif($status >= 25.1 && $status < 27) 
        Berat : {{$berat}} <br>
        Tinggi : {{$tinggi}} <br>
        Status : {{$status}} <br>
        Umur : {{$umur}} <br>
        Status Berat Badan : {{$statusbadan = "Gemuk"}}
    @elseif($status >= 27.1)  
        Berat : {{$berat}} <br>
        Tinggi : {{$tinggi}} <br>
        Status : {{$status}} <br>
        Umur : {{$umur}} <br>
        Status Berat Badan : {{$statusbadan = "OverDosis"}} 
    @endif

<!-- Cara Baru-->

    <hr>
        Berat : {{$berat}} <br>
        Tinggi : {{$tinggi}} <br>
        Status : {{$bmi}} <br>
        Umur : {{$umur}} <br>
        Status Berat Badan : {{$status}}
    </fieldset>

</body>
</html>