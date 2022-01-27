<?php

namespace App\Models;


class Universidad 
{
   public $estudia;
   public $edad;
   public $genero;
   public $ciudad;
   public $pais;
   public $estado;
   public function mostrarAmigos(){
       $amigos = ["Ivan", "Emmanuel", "Kevin"];
       return $amigos;
   } 
}
