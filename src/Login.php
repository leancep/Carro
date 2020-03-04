<?php
namespace Carrito;
session_start();
class Login implements \Libreria\Controller{
    public function get($get,$post,&$session){
        $acceder= new \Libreria\TemplateEngine("../temp/acceder.html");
        return $acceder->render();   
    }
    public function post($get,$post,&$session){
        $session["log"]=False;
        $usuarios= array("admin"=>"1234");
        foreach ($usuarios as $user=>$pass){
            if ($post["usuario"]==$user && $post["pass"]==$pass){
                $session["log"]=True;
            }
        }
        if ($session["log"]==True){
            header("location: index.php?page=menu");
        } else{
            header("location: index.php?page=login");
        }
        $login= new \Libreria\TemplateEngine();
        return $login->render();
    }
    
}
        
