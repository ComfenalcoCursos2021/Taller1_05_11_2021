// 2.Realice un programa que calcule el máximo de N números leídos desde teclado.
addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method : "POST",
        body: {
            numeros: []
        }
    }
    var i = 1;
    do{
        config.body.numeros.push(parseInt(prompt(`Ingresar un numero ${i}`, "23")));
        var permiso = parseInt(prompt(`Desea Ingresar otro numero?
            1. Si
            0. No

Lista de numeros ingresados: ${config.body.numeros.join()}
        `));
        i++;
    }while(permiso);

    config.body = JSON.stringify(config.body);
    let peticion = await fetch("https://pruebacofenalco.000webhostapp.com/Taller1_05_11_2021/Ejercicio_2/api.php", config);
    let json = await peticion.text();
    alert(json);
})