<?php
    require "defines.php";
    $principal = 'Principal';
    if(!(isset($_REQUEST['c']))){
        require_once('Controller/'.$principal.'Controller.php');
        $view = $principal.'Controller';
        $view = new $view;
        $view->index();
    }else{
        $cont = ucwords($_REQUEST['c']);
        require_once($cont.'Controller.php');
        $controller = $cont.'Controller';
        $accion = isset($_REQUEST['a'])? $_REQUEST['a']: 'index';
        $controller =new $controller;
        $controller ->$accion();
    }
?>