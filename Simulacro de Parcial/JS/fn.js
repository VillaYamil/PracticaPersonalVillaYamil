// Obtener referencia al botón y al input
const botonAgregar = document.getElementById('botonAgregar');
const inputValor = document.getElementById('inputValor');
const listaValores = document.getElementById('listaValores');

// Crear un array para almacenar los valores
let miArray = [];
// Función para agregar el valor del input al array
function agregarValor() {

      // Verificar si el array ya tiene 10 elementos
      if (miArray.length >= 10) {
        alert('Ya se han agregado 10 valores, no se pueden agregar más.');
        return; // Salir de la función si ya hay 10 elementos
    }
    // Obtener el valor del input
    const valor = inputValor.value;

    // Agregar el valor al array
    miArray.push(valor);
    console.log(miArray);
    // Limpiar el input
    inputValor.value = '';
}

// Función para mostrar los valores en la lista
/*function mostrarValores() {
    // Limpiar la lista
    listaValores.innerHTML = '';

    // Agregar cada valor como un elemento de lista
    miArray.forEach(valor => {
        const li = document.createElement('li');
        li.textContent = valor;
        listaValores.appendChild(li);
    });
}*/

// Agregar un event listener al botón para llamar a la función agregarValor() cuando sea clickeado
botonAgregar.addEventListener('click', agregarValor);

   // Función para encontrar el mayor valor en el array + buscar personaje
    function buscarPersonaje(){
    const mayorValor = Math.max(...miArray);
    console.log('El mayor valor ingresado es:', mayorValor);
    const url = `https://rickandmortyapi.com/api/character/${mayorValor}`;
    fetch (url)
    .then(Response=>Response.json())
    .then((data)=>{
        console.log(data)
        document.getElementById("info").innerHTML=
        `<h1> Status: ${data.status}</h1>
        <h2> Nombre: ${data.name}</h2>
        <img src="${data.image}">`
    });
}