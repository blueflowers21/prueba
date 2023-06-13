<?php
    class App{
        function __construct()
        {
           // echo"<p>Mi Aplicacion
           // MVC de WEB II</p>";
            //trabajando la url
            $url=$_GET['url'];
           // echo $url;
           // echo "<br>";
            $url =explode("/",$url);          
           // echo $url[0];
           // echo "<br>";
            $ruta="controllers/".$url[0].".php";
           // echo $ruta;
           // echo "<br>";
            if(file_exists($ruta)){
                require_once $ruta;
                $c=new $url[0];
                //verificar metodo en $url[1]
                if(isset($url[1])){
                    //lamamos al metodo
                    $c->{$url[1]}();
                }
            }else{
                
                require_once "controllers/errores.php";
                $e =new Errores();

            }
            


        }
    }
?>