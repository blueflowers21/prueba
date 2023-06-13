<?php 

class Main extends Controller{
    function __construct()
 {
    parent::__construct();
    $this->view->render("main/index");
    //echo"LLamaste al main";
}
function saludar(){
    echo"<p>HEYYYYY</p>";
    echo"Desde el main";
}
}

?>