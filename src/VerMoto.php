<?php
namespace Carrito;
session_start();

class VerMoto implements \Libreria\Controller{
    public function get($get,$post,&$session){
        include("inventarioMotos.php");
        
        $verMoto= new \Libreria\TemplateEngine("../temp/verAuto.html");
        $verMoto->addVariable("rodado",$motos[$get["id"]]["rodado"]);
        $verMoto->addVariable("km",$motos[$get["id"]]["km"]);
        $verMoto->addVariable("anio",$motos[$get["id"]]["anio"]);
        $verMoto->addVariable("precio",$motos[$get["id"]]["valor"]);
        $verMoto->addVariable("img",$motos[$get["id"]]["img"]);
        return $verMoto->render();

       
    }
    public function post($get,$post,&$session){

    }
}