<?php
namespace Carrito;
session_start();

class VerAuto implements \Libreria\Controller{
    public function get($get,$post,&$session){
        include("inventarioAutos.php");
        
        $verAuto= new \Libreria\TemplateEngine("../temp/verAuto.html");
        $verAuto->addVariable("rodado",$autos[$get["id"]]["rodado"]);
        $verAuto->addVariable("anio",$autos[$get["id"]]["anio"]);
        $verAuto->addVariable("km",$autos[$get["id"]]["km"]);
        $verAuto->addVariable("precio",$autos[$get["id"]]["valor"]);
        $verAuto->addVariable("img",$autos[$get["id"]]["img"]);
        return $verAuto->render();

       
    }
    public function post($get,$post,&$session){

    }
}