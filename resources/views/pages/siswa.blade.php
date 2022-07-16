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
        Data Siswa
    </legend>
    
    @foreach ($siswa as $murid)

    Nama : {{ $murid['nama'] }} <br>
    Umur : {{ $murid['age'] }} <br>
    @if ($murid['age'] > 0 && $murid['age'] <= 17) 
            Belum bisa memiliki SIM <br>
        
    @elseif ($murid['age'] > 17 && $murid['age'] < 150) 
            Sudah bisa memiliki SIM <br>
        
    @endif
    Hobi:
        @foreach ($murid['hobi'] as $hobi)
        <ul>
            <li>
                {{ $hobi }} 
            </li>
        </ul>
        @endforeach

    <hr>
    @endforeach
    </fieldset>
</body>
</html>