<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($kampus as $dosen)
    <br>
    <fieldset>
        <legend>
            <h4>
                Data Kampus  
            </h4>
        </legend>
            ID Dosen : {{ $dosen['id'] }} <br>
            Name Dosen : {{ $dosen['nama'] }} <br> <br>
            <hr>
            @foreach ($dosen['mahas'] as $mahas)
                ID Mahasiswa: {{ $mahas['id'] }} <br>
                Nama Mahasiswa : {{ $mahas['nama']}}  <br>     
                Mata Kuliah : 
                @foreach ($mahas['mata'] as $mata)
                <ul>
                    <li>
                        {{ $mata }} 
                        
                    </li>
                </ul>
                
                @endforeach
                @endforeach 
            </fieldset>
        @endforeach

    </body>
</html>