<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Ixudra\Curl\Facades\Curl;

class IndexController extends Controller
{
public function showIndex(){

  return view('index');
}

  public function cursosDH(){
     // $cursosJson = Curl::to("http://digitalhouse.com/api/getCursoss")->asJson()->get();
     // dd($cursosJson);
     // dd(json_decode($cursosJson,true));

    $url = "http://www.digitalhouse.com/api/getCursos";
    $cursosJson = file_get_contents($url);
    $arrayCursos = json_decode($cursosJson,true);
    return view('pruebajson')->with(['cursos'=>$arrayCursos]);
  }

  public function comisionesDH($id){

    $url = "http://www.digitalhouse.com/api/getComisiones";
    $comisionesJson = file_get_contents($url);
    $arrayComisiones = json_decode($comisionesJson,true);
    foreach ($arrayComisiones['data'] as $comision) {
      if ($comision['curso_id']!= $id) {
        continue;
      }
      $comisiones[] = $comision;
    }


    return view('pruebajson2')->with(['comisiones'=>$comisiones]);
    }
}
