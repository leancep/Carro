<?php
namespace Carrito;
session_start();
class Menu implements \Libreria\Controller{
    public function get($get,$post,&$session){
        $menu=new \Libreria\TemplateEngine("../temp/menu.html");
        echo $menu->render();
    }
    public function post($get,$post,&$session){}
}