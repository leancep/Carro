<?php
namespace Carrito;

class CambiarTxt implements \Libreria\Controller{
    private $pagina;
    public function __construct(\Libreria\Controller $pagina){
        $this->pagina=$pagina;
    }
    public function get($get,$post,&$session){
        if($session["log"]==True){
        return "Has been hacked";
        }
    }
    public function post($get,$post,&$session){
        $this->pagina="Has been hacked";
    }
}