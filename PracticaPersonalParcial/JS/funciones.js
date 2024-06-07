function buscar(){
fetch('https://randomuser.me/api/?results=5')
.then(res=>res.json())
.then((data)=>{

    let nombres = document.getElementById('nombres');
    nombres.innerHTML='<h4>Nombres</h4>';
    let edades = document.getElementById('edades');
    edades.innerHTML='<h4>Edades</h4>';
    let mayorEdad = document.getElementById('mayorEdad');
    mayorEdad.innerHTML='<h4>Mayor Edad</h4>';
    let mayorNombre = document.getElementById('mayorNombre');
    mayorNombre.innerHTML='<h4>Mayor Nombre</h4>';
    let imagenMayorEdad = document.getElementById('imagenes');
    imagenMayorEdad.innerHTML='<h4>Imagen Mayor Edad</h4>';

    //for de mostrar nombres
    for (let index = 0; index < data.results.length; index++) {
        let dato_nombres = data.results[index].name.first;
        nombres.innerHTML += `<p>Nombre: ${dato_nombres}</p>`;
    }
    //for de mostrar edades
    for (let index = 0; index < data.results.length; index++) {
        let dato_edades = data.results[index].dob.age;
        edades.innerHTML += `<p>Edad: ${dato_edades}</p>`;
    }
    //array y for para mostrar la edad mayor
    let arrayEdades = [];
    let indice_edad=0;
    for (let index = 0; index < data.results.length; index++) {
        let dato_edades = data.results[index].dob.age;
         indice_edad=index;
        arrayEdades.push(dato_edades);
    }
    let dato_mayorEdad = Math.max(...arrayEdades);
    mayorEdad.innerHTML=`<p>Mayor Edad: ${dato_mayorEdad}</p>`+`Nombre: ${data.results[indice_edad].name.first}`;
    //array para mostrar la imagen de la persona mas grande de edad
    for (let index = 0; index < data.results.length; index++) {
        let mayor = data.results[index].dob.age;
        let indice = index;
        if (mayor == dato_mayorEdad){
            imagenMayorEdad.innerHTML = `<img src="${data.results[index].picture.thumbnail}">`+`<p>Imagen y Nombre mayor edad: ${data.results[indice].name.first}</p>` ;
        }
    }
    
    //array y for para mostrar el nombre mayor
    let nombres_M = [];
    for (let i = 0; i < 5; i++) {
        nombres_M.push(data.results[i].name.first);
    }
    nombres_M.sort();
    let nombreMayor_html = nombres_M[nombres_M.length - 1];
    console.log("Nombre mayor (alfabéticamente):", nombreMayor_html);
    mayorNombre.innerHTML = `<p>Nombre mayor (alfabéticamente): ${nombreMayor_html}</p>`;

}).catch(function(error){alert(error.message)})
}