<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index()
    {
        return view('welcome');
   }

   public function amigos(){

     $amigos = [
       ['nome' => 'Bruno Porco Velho', 'email' => 'brunogok@hotmail.com'],
       ['nome' => 'Daivid Ganhando em EUROS bitch', 'email' => 'daivid.silverio@gmail.com'],
       ['nome' => 'Rebecca Alves HazelGrace', 'email' => 'rebeccafalves@gmail.com'],
       ['nome' => 'Thiago Sumido Fukunaga', 'email' => 'thiagoyudifukunaga@gmail.com']
     ];

     return $amigos;
   }

}
