<?php 

class Errores extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render("errores/index");
       // echo"Llamaste al controlador errores";
        //echo "No existe ese recurso";
    }
}

?>