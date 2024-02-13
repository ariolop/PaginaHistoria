"use script";

document.getElementById("idioma").addEventListener("click", () => {

    console.log(document.getElementById("imagenIdioma").src);

    if(document.getElementById("imagenIdioma").src === "img/lenguajes/ingles.png")
    {
        document.getElementById("imagenIdioma").src = "img/lenguajes/espanol.png";
        //Función pasar página a Inglés y agregar a LocalStorage/Cookie el idioma
    }
    else
    {
        document.getElementById("imagenIdioma").src = "img/lenguajes/ingles.png";
        //Función pasar página a Enpañol y agregar a LocalStorage/Cookie el idioma
    }
});