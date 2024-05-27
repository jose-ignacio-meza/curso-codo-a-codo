let contenedorPersonajes = document.getElementById("contenedorPersonajes")

fetch("https://rickandmortyapi.com/api/character")
.then((response)=>response.json())
.then((datos)=>{

    console.log(datos)
    console.log(datos.results)

    datos.results.forEach((elementos) => {
        console.log(elementos.name)

        const contenedorCreado = document.createElement('div')
        contenedorCreado.className += "tarjetaPersonaje";

        contenedorCreado.innerHTML = `
            <div>
            <h4>${elementos.name}</h4>
            <div>
            <div>
            <img src="${elementos.image}">
            <div>
        `;


       contenedorPersonajes.append(contenedorCreado)


    });

})