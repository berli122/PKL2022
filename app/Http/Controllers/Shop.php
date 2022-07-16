<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop extends Controller
{
    public function shop()
    {
      
      $belanja =[
      
        ['nama_orang'=> 'Alfisan',
         'pembelian' =>
            [
                ['jenis' => 'SEPATU','merk'=> 'VANS','harga'=>250000],
                ['jenis' => 'BAJU','merk'=> 'ERIGO','harga'=>100000],
                ['jenis' => 'CELANA','merk'=> 'ERIGO','harga'=>150000],
                ['jenis' => 'KUPLUK','merk'=> 'VANS','harga'=>100000],
            ]
        ],
        ['nama_orang'=>'DADI',
        'pembelian'=>
            [
                ['jenis' => 'TOPI','merk'=> 'EIGER','harga'=>150000],
                ['jenis' => 'BAJU','merk'=> 'ERIGO','harga'=>75000],
                ['jenis' => 'CELANA','merk'=> 'ERIGO','harga'=>125000],
            ]
        ]
      ];
      return view('berli.shop',['belanja' => $belanja]);
    }
  

}

