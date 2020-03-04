<?php
namespace Carrito;
session_start();
class ListaAutos implements \Libreria\Controller
{
    public function get($get,$post,&$session){
        include_once("inventarioAutos.php");
        $str="";
        foreach ($autos as $id=>$rodado){
            $concesionaria= new \Libreria\TemplateEngine("../temp/listaautos.html");
            $concesionaria->addVariable("rodado",$rodado["rodado"]);
            $concesionaria->addVariable("anio",$rodado["anio"]);
            $concesionaria->addVariable("km",$rodado["km"]);
            $concesionaria->addVariable("valor",$rodado["valor"]);
            $concesionaria->addVariable("id",$id);
            $str.=$concesionaria->render();
        }
        $listado=new \Libreria\TemplateEngine("../temp/autosmodel.html");
        $listado->addVariable("listado",$str);
        echo $listado->render();
    }
    public function post($get,$post,&$session){}
}
