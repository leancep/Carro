<?php
namespace Carrito;
session_start();
class ListaMotos implements \Libreria\Controller
{
    public function get($get,$post,&$session){
        include_once("inventarioMotos.php");
        $str="";
        foreach ($motos as $id=>$rodado){
            $concesionaria= new \Libreria\TemplateEngine("../temp/listamotos.html");
            $concesionaria->addVariable("rodado",$rodado["rodado"]);
            $concesionaria->addVariable("anio",$rodado["anio"]);
            $concesionaria->addVariable("km",$rodado["km"]);
            $concesionaria->addVariable("valor",$rodado["valor"]);
            $concesionaria->addVariable("id",$id);
            $str.=$concesionaria->render();
        }
        $listado=new \Libreria\TemplateEngine("../temp/motosmodel.html");
        $listado->addVariable("listado",$str);
        echo $listado->render();
    }
    public function post($get,$post,&$session){}
}
