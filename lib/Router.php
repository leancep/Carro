<?php
namespace Libreria;
class Router{
    private $lista=array();
    function addRoute(string $path, $target){
        $path="#".$path."#";
        if (empty ($this->lista[$path])){
        $this->lista[$path]=$target;
        return True;
        }
        else{
            return False;
        }
    }
    function match(string $path){
        foreach ($this->lista as $regex=>$target){
            $r= preg_match_all($regex,$path);
            if ($r>0){
                return $target;
            }
        }
        return null;
    }
        // if (empty ($this->lista[$path])){
        //     return "No Existe";
        // }
        // else {
        // return $this->lista[$path];
        // }
}
