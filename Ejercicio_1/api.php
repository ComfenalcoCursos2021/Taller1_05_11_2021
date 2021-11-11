<?php
    // 1.Realizar un programa que permita leer 2 números diferentes y nos diga cual es el mayor de los 2 números.
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    $_DATA = file_get_contents("php://input");
    if ($_DATA){
        $_DATA = json_decode($_DATA, true);
        
        extract($_DATA);
    }else{
        $numero1 = (integer) 5;
        $numero2 = (integer) 10;
        
    }

    $mensaje = (string) "";
    if($numero1 > $numero2){
        $mensaje = <<<HTML
<code>$${!${''}= "numero1"} (<span>${!${''} = gettype($numero1)}</span>) <span>=</span> <span>$numero1</span>,
$${!${''}= "numero2"} (<span>${!${''} = gettype($numero2)}</span>) <span>=</span> <span>$numero2</span></code>
<code>El numero <span>$numero1</span> es mayor que el numero <span>$numero2</span>, <br><span>Servidor del BACKEND: ${!${''} = $_SERVER["HTTP_HOST"]}</span></code>
HTML;
    }else{
        $mensaje = <<<HTML
<code>$${!${''}= "numero1"} (<span>${!${''} = gettype($numero1)}</span>) <span>=</span> <span>$numero1</span>,
$${!${''}= "numero2"} (<span>${!${''} = gettype($numero2)}</span>) <span>=</span> <span>$numero2</span></code>
<code>El numero <span>$numero2</span> es mayor que el numero <span>$numero1</span>, <br><span>Servidor del BACKEND: ${!${''} = $_SERVER["HTTP_HOST"]}</span></code>
HTML;
    }

    print_r($mensaje);
?>