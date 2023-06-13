<?php

class Categoria extends Controller{
 function __construct()
 {
    parent::__construct();
    parent::demo();
    parent::__construct();
        $this->view->render("categoria/index");
    echo"LLamaste al controlador categoria";
}

}

?>