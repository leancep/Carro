<?php 
namespace Carrito;

class LoginCheck implements \Libreria\Controller{
    private $pagina;

    public function __construct(\Libreria\Controller $pagina){
        $this->pagina=$pagina;
    }
    public function get($get,$post,&$session){
        if ($session["log"]==True){
            return $this->pagina->get($get,$post,$session);
        }else{
            return "Acceso denegado";
        }
    }

    public function post($get,$post,&$session){
        if ($session["log"]==True){
            return $this->pagina->post($get,$post,$session);
        }else{
            return "Acceso denegado por post";
        }
    }
}