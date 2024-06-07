class Persona {
    constructor(firstName, lastName, gender, age, picture) {
        this.firstName = firstName;
        this.lastName = lastName;
        this.gender = gender;
        this.age = age;
        this.picture = picture;
    }
}
let datoJson;
        function MostrarPersonas() {
            let buscar;
            let yamil = document.getElementById('local').checked;
            if (yamil) {
                buscar = 'https://randomuser.me/api/?results=10';
                 
            } else {
                buscar = "personas.json";
            }

    fetch(buscar)
    .then(response => response.json())
    .then((data) => {
        datoJson = data;
        // Elementos contenedores
        let maleContainer = document.getElementById('male');
        let femaleContainer = document.getElementById('female');
        let imagenMayor = document.getElementById('imagen');
        let mayorNombre = document.getElementById('MayorNombre');
        // Limpiar contenido previo
        maleContainer.innerHTML = '<h2>Hombres</h2>';
        femaleContainer.innerHTML = '<h2>Mujeres</h2>';
        imagenMayor.innerHTML = '';
        mayorNombre.innerHTML = ''; // Limpiar el contenedor

        // Crear un array de objetos Persona
        let personas = [];
        for (let i = 0; i < 9; i++) {
            let personaData = datoJson.results[i];
            let persona = new Persona(
                personaData.name.first,
                personaData.name.last,
                personaData.gender,
                personaData.dob.age,
                personaData.picture.thumbnail
            );
            personas.push(persona);
        }

        // Iterar sobre las personas y asignar a contenedores correspondientes
        personas.forEach(persona => {
            let personInfo = `<p>${persona.firstName}</p>`;
            if (persona.gender === "male") {
                maleContainer.innerHTML += personInfo;
            } else if (persona.gender === "female") {
                femaleContainer.innerHTML += personInfo;
            }
        });

        // Encontrar la persona de mayor edad
        let maxAge = Math.max(...personas.map(persona => persona.age));
        console.log(maxAge);
        personas.forEach(persona => {
            if (maxAge === persona.age) {
                imagenMayor.innerHTML += `<img src="${persona.picture}" alt="Imagen de la persona más grande">`;
            }
        });

        let contador_female = personas.filter(persona => persona.gender === "female").length;
        let contador_male = personas.filter(persona => persona.gender === "male").length;
        femaleContainer.innerHTML += `<p>Contador Mujeres: ${contador_female}</p>`;
        maleContainer.innerHTML += `<p>Contador Hombres: ${contador_male}</p>`;

        // Ordenar los nombres y encontrar el mayor
        let nombres = personas.map(persona => persona.firstName).sort();
        let nombreMayor = nombres[nombres.length - 1];
        console.log("Nombre mayor (alfabéticamente):", nombreMayor);

        // Mostrar el nombre mayor en el contenedor
        mayorNombre.innerHTML = `<p>Nombre mayor (alfabéticamente): ${nombreMayor}</p>`;
    })
    .catch(function(error) {
        if (error.message === 'Failed to fetch') {
            alert('No se pudo realizar la solicitud debido a la falta de conexión a Internet.');
        } else {
            alert('Ocurrió un error: ' + error.message);
        }
    });
}