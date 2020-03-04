<?php
include_once("../vendor/autoload.php");

$router= new \Libreria\Router();
// $router->addRoute("Acceso",new \Carrito\Acceso());
$router->addRoute("login",new \Carrito\Login());
$router->addRoute("logout",new \Carrito\Logout());
$router->addRoute("menu",new \Carrito\Menu());

$router->addRoute("listamotos",
new \Carrito\LoginCheck(
new \Carrito\ListaMotos()
));

$router->addRoute("listaautos",
new \Carrito\LoginCheck(
new \Carrito\ListaAutos()
));
    
$router->addRoute("verauto",
new \Carrito\LoginCheck(
new \Carrito\VerAuto()
));

$router->addRoute("vermoto",
new \Carrito\LoginCheck(
new \Carrito\VerMoto()
));

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $match=$router->match($_GET["page"]);
    echo $match->post($_GET,$_POST,$_SESSION);
}
else{
    $match=$router->match($_GET["page"]);
    echo $match->get($_GET,$_POST,$_SESSION);
}



// echo $match->mostrar();

// $router->addRoute("listaProductos.php","../Src/listaProductos.php");


// // if ($_GET["page"]=="Acceso"){
// //     $pagina= new \Carrito\Acceso();
// //     echo $pagina->mostrar();
// // }

// if ($_GET["page"]=="login"){
//     $login= new \Carrito\Login();
//     echo $login->mostrar();
// }
// if ($_GET["page"]=="listamotos"){
//     $list=new \Carrito\ListaMotos();
//     echo $list->mostrar();
// }
// if ($_GET["page"]=="menu"){
//     $menu= new \Carrito\Menu();
//     echo $menu->mostrar();
// }
// if ($_GET["page"]=="listaautos"){
//     $list=new \Carrito\ListaAutos();
//     echo $list->mostrar();
// }