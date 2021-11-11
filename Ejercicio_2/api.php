<?php
// 2.	Realice un programa que calcule el máximo de N números leídos desde teclado.
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    $_DATA = file_get_contents("php://input");
    if ($_DATA){
        $_DATA = json_decode($_DATA, true);
        extract($_DATA);
    }else{
        $numeros = (array) [0];
    }
    print_r(<<<JOSN
    El numero mayor es ${!${''} = max($numeros)} lista de numeros enviados es: 
    ${!${''} = implode(",", $numeros)}
JOSN);

?>