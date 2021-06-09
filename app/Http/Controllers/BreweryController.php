<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class BreweryController extends Controller
{
    public function todas()
    {
        $cervecerias = [
          [
            "nombre"=>"Old Town",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>20
            ],
          [
            "nombre"=>"Irish Drunks",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>43
            ],
          [
            "nombre"=>"Joyce",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>17
            ],
          [
            "nombre"=>"Piccolo Bar",
            "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus, aspernatur dolorem distinctio ad ipsa quos pariatur porro exercitationem quidem dolorum cupiditate totam ipsum illo fuga asperiores cumque vel numquam amet?",
            "aforo"=>26
            ]
        ];
        return view("cervecerias",["breweries"=>$cervecerias]);
    }
    
    public function details()
    {
        $detalles = 
      [
        [
          "nombre"=>"Dorada no filetrada",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit",
          "cantidad"=>20,
          "img"=>""
          ],
        [
          "nombre"=>"Mahou classica",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit",
          "cantidad"=>5,
          "img"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ9eNncrZiIDDliAUy3okHfhS3QFClFm8YLQ&usqp=CAU"
          ],
        [
          "nombre"=>"Estrella galicia",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit",
          "cantidad"=>150,
          ],
        [
          "nombre"=>"San Miguel",
          "desc"=>"Lorem ipsum dolor sit, amet consectetur adipisicing elit",
          "cantidad"=>0
          ]
      ];

    return view ("detalles", ["lots"=>$detalles]);
    //return view ("detalles", compact('detalles'));
}

public function newCerveceria(){
  return view ("newCerveceria");
}



 
public function create(Request $request){
  dd($request->all());

}
}