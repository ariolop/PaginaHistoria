"use script";

document.getElementById("idioma").addEventListener("click", () => {

    const imagenActual = document.getElementById("imagenIdioma").src.split("/").slice(-1);
    console.log(imagenActual);

    if(imagenActual[0] === "ingles.png")
    {
        document.getElementById("imagenIdioma").src = "./img/lenguajes/espanol.png";
        //Función pasar página a Inglés y agregar a LocalStorage/Cookie el idioma
    }
    else
    {
        document.getElementById("imagenIdioma").src = "./img/lenguajes/ingles.png";
        //Función pasar página a Enpañol y agregar a LocalStorage/Cookie el idioma
    }
});