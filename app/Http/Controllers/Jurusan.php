<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jurusan extends Controller
{
    public function sekolah()
    {
        $jurusan = 
        [
            [
                'jrsn' => "TKR",
                'sisw' => 
                [
                    [
                        'nama' => "Agus",
                        'nilai' => 
                        [
                            [

                                'bind' => 80,
                                'bing' => 97,
                                'prod' => 67,
                                'mate' => 100
                            ]
                        ]
                    ],
                    [
                        'nama' => "Mahmud",
                        'nilai' => 
                        [
                            [
                                'bind' => 78,
                                'bing' => 86,
                                'prod' => 90,
                                'mate' => 67

                            ]
                        ] 
                    ]

                ]
            ]

        ];
        return view('berli.jurusan', ['jurusan' => $jurusan]);
    }
}
