<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home (){
        $inizio=[
            [
                'img'=>'./img/cars.jpg','name'=>'Auto'
            ]
            ];
        return view ('welcome',compact('inizio'));
    }
    public function marche (){
        $brands =[
            [
                'img'=>'./img/audi.jpeg','name'=>'audi','motore'=>'2000cc','velmax'=>'230kh'
            ],
            [
                'img'=>'./img/BMW.jpg','name'=>'bmw','motore'=>'3000cc','velmax'=>'230kh'
            ],
            [
                'img'=>'./img/Mercedes.jpg','name'=>'mercedes','motore'=>'4000cc','velmax'=>'230kh'
            ],
            [
                'img'=>'./img/fiat.jpg','name'=>'fiat','motore'=>'5000cc','velmax'=>'150kh',
            ]
            ];
        return view ('marche', compact('brands'));
    }

    public function dettaglio ($name){

$brands= [
    [
        'img'=>'/img/audi.jpeg','name'=>'audi','colore'=>'verde','type'=>'S3'
    ],
    [
        'img'=>'/img/BMW.jpg','name'=>'bmw','colore'=>'blu','type'=>'serie 1'
    ],
    [
        'img'=>'/img/Mercedes.jpg','name'=>'mercedes','colore'=>'nero','type'=>'classe E'
    ],
    [
        'img'=>'/img/fiat.jpg','name'=>'fiat','colore'=>'blu','type'=>'500'
    ]
    ];
    foreach($brands as $brand){
        if($brand['name'] == $name){

            return view('dettaglio',compact('brand'));
        }
    }
    }

    public function prezzi (){
        $models =[
            [
                'img'=>'./img/audi.jpeg','name'=>'Audi','prezzo'=>'15000 euro',
            ],
            [
                'img'=>'./img/BMW.jpg','name'=>'Bmw','prezzo'=>'3000 euro',
            ],
            [
                'img'=>'./img/Mercedes.jpg','name'=>'Mercedes','prezzo'=>'4000 euro',
            ],
            [
                'img'=>'./img/fiat.jpg','name'=>'Fiat','prezzo'=>'50000 euro',
            ]
            ];
        return view ('prezzi', compact('models'));
    }

    public function chisiamo(){
        $dipendenti = [
            [ 'img'=> './img/venditore.jpg', 'name' => 'Marco Di Candia', 'mansione' => 'Vendita'],
            [ 'img'=> './img/accoglienza.png','name' => 'Nico Cappai', 'mansione' => 'Accoglienza'],
            [ 'img'=> './img/finanziamento.webp','name' => 'Gabriele Garofalo', 'mansione' => 'Finanziamenti'],
        ];
        return view ('chisiamo', compact('dipendenti'));
    }
}
