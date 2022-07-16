<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    //Class

    public function hallo() 
    {

        $f = 10;
        $total = $f*100;
        if ($total >= 1000) {
            return 'Diatas Seribu';
        } else {
            return 'Dibawah Seribu';
        }

    }

    public function profile() {
            return view('welcome');
    }

    public function facebook($nama, $perkalian, $jk)
    {
        $calculator = 1 + 5;
        $hasil = $calculator * $perkalian;
        $jk;
        return view('about',compact('hasil','nama','jk'));
    }

    public function siswa()
    {
        $a = [
                [
                    'id' => 1, 
                    'nama' => 'Berli', 
                    'age' => 15, 
                    'hobi' => 
                    [
                        'Gaming', 'Creator',
                    ]
                ],
                [
                    'id' => 2, 
                    'nama' => 'Kamu', 
                    'age' => 20, 
                    'hobi' => 
                    [
                        'Renang', 'Futsal', 'Bola',
                    ]
                ]
        ];
        
        return view('pages.siswa', ['siswa' => $a]);
    }

    public function badan($berat, $tinggi, $umur) 
    {
        $bmi = $berat/(($tinggi/100) * ($tinggi/100));
        if($bmi <= 17) {
            $status = "Kurus, Sehat?";
        }
        
        elseif($bmi > 17 && $bmi <= 18.4) {
            $status = "Kurus, Kurang Berat Badan";
        }
       
        elseif($bmi >= 18.5 && $bmi <= 25) {
            $status = "Normal";
        }
        
        elseif($bmi >= 25.1 && $bmi < 27) {
            $status = "Gemuk"; 
        }
        
        elseif($bmi >= 27.1) {
            $status = "OverDosis";
        }

        else {
            $status = "Hidup?";
        }

        
        
        return view('berli.berat',compact('berat','tinggi', 'status','bmi' ,'umur'));
  
        
}


}
