<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dosen extends Controller
{
    public function kampus(){
        
        $kampus = 
        [
            [
                'id' => "122", 
                'nama' => "Dadang", 
                'mahas' =>
                [

                    [
                        'id' => "200", 
                        'nama' => "Cahya",
                        'mata' => 
                        [
                            "PKN", "Bahasa", "Produktive"
                        ],
                    
                    ],
                    [    
                        'id' => "211",
                        'nama' => "Davin",
                        'mata' => 
                        [
                            "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                    [    
                        'id' => "211",
                        'nama' => "Dani",
                        'mata' => 
                        [
                            "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                    [    
                        'id' => "211",
                        'nama' => "Danu",
                        'mata' => 
                        [
                            "KKN", "Bahasa", "Kartun"
                        ],
                    ],

                ]
            ],
            [
                'id' => '222', 
                'nama' => 'Kamu', 
                'mahas' => 
                [
                    [
                        'id' => "222", 
                        'nama' => "Yatha",
                        'mata' => 
                        [
                            "PKN", "Bahasa", "Produktive"
                        ],
                    
                    ],
                    [    
                        'id' => "213",
                        'nama' => "Dadang",
                        'mata' => 
                        [
                                "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                    [
                        'id' => "222", 
                        'nama' => "Yati",
                        'mata' => 
                        [
                            "PKN", "Bahasa", "Produktive"
                        ],
                    
                    ],
                    [    
                        'id' => "213",
                        'nama' => "Dada",
                        'mata' => 
                        [
                                "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                    [    
                        'id' => "213",
                        'nama' => "Dang",
                        'mata' => 
                        [
                                "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                ]
            ],
            [
                'id' => "122", 
                'nama' => "Danu", 
                'mahas' =>
                [

                    [
                        'id' => "200", 
                        'nama' => "Cahya",
                        'mata' => 
                        [
                            "PKN", "Bahasa", "Produktive"
                        ],
                    
                    ],
                    [    
                        'id' => "211",
                        'nama' => "Davin",
                        'mata' => 
                        [
                            "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                    [    
                        'id' => "211",
                        'nama' => "Dani",
                        'mata' => 
                        [
                            "KKN", "Bahasa", "Kartun"
                        ],
                    ],
                    [    
                        'id' => "211",
                        'nama' => "Danu",
                        'mata' => 
                        [
                            "KKN", "Bahasa", "Kartun"
                        ],
                    ],

                ]
            ],
        ];
        //dd($kampus);
        return view('berli.kampus', ['kampus' => $kampus]);
        
    }
}
// $size = count($kampus);
// $keys = array_keys($kampus);
// for($i = 0; $i < $size; $i++)
// {
//     echo $keys[$i]."<br>";
//     foreach($kampus[$keys[$i]] as $key=> $value)
//     {
        
//     } 
// }
