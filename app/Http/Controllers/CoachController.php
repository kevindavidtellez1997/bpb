<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    // public function index(){
         
    //     $coach = HTTP::get('https://bpbtraining-backend-api.herokuapp.com/api/v1/usuario/obtener-rol?idRol=2');
    //     $coachs = $coach->json();
      
    //     $info = ($coachs['data']);
    //     return view('home', compact('info'));    
    // }


    // public function resbookCoack($nombre){
        
    //     $coach = HTTP::get('https://bpbtraining-backend-api.herokuapp.com/api/v1/usuario/obtener-rol?idRol=2');
    //     $coachs = $coach->json();
    //     $user = ($coachs['data']);       
    //     //$usuario="Obed";
    //     for($i=0; $i < count($user) ; ++$i){
    //         if($user[$i]['nombre']== $nombre){
    //             $nombre = $user[$i];
    //             return view('ReserCoach2',compact('nombre'));
    //         }
    //     }
    // }

    
    public function storage(Request $request){

        // $First_name = $request->get('first_name');
        // $Last_name = $request->get('last_name');
        // $Document = $request->get('document');
        //$coach = HTTP::get('https://bpbtraining-backend-api.herokuapp.com/api/v1/usuario/obtener-rol?idRol=2'.'/?id='.$id);
    }
    

}
