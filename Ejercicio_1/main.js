addEventListener("DOMContentLoaded", async()=>{
    let config = {
        method: "POST",
        body:JSON.stringify({
            numero1: parseInt(prompt("Ingrese el numero 1", "10")),
            numero2: parseInt(prompt("Ingrese el numero 2", "5"))

        })
    };
    let peticion = await fetch("https://pruebacofenalco.000webhostapp.com/Taller1_05_11_2021/Ejercicio_1/api.php", config);
    let data = await peticion.text();
    document.querySelector("pre").insertAdjacentHTML("beforeend", data);
    console.log(data);
})