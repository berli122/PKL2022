<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($jurusan as $data)
    @foreach($data['sisw'] as $siswa)
            Jurusan : {{ $data['jrsn']}} <br>
            Nama Siswa : {{ $siswa['nama'] }} <br><br>
            @foreach($siswa['nilai'] as $nilai)
                Pelajaran <br>
                B. Indonesia : {{ $nilai['bind'] }} <br>
                B. Inggris : {{ $nilai['bing'] }} <br>
                Produktif : {{ $nilai['prod'] }} <br>
                Matematika : {{ $nilai['mate'] }} <br>
                Rata - Rata : {{ $rata = ($nilai['bind'] + $nilai['bing'] + $nilai['prod'] + $nilai['mate'])/4 }} <br>
                @if($rata >= 85 && $rata <= 100)
                Grade A
                @elseif(($rata >=75  && $rata < 85))
                Grade B
                @elseif(($rata >=60  && $rata < 75))
                Grade C
                @elseif(($rata >=50  && $rata <  60))
                Grade D
                @elseif(($rata >=0  && $rata < 50))
                Grade E
                @endif 
                <br><br>
            @endforeach
        @endforeach
    @endforeach
</body>
</html>