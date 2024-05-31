let datoJson;
function MostrarPersonas(){
const personas = "personas.json";
    fetch (personas)
    .then(response=>response.json())
    .then((data)=>{
        //console.log(data);
     datoJson=data;
     // Elementos contenedores
     let maleContainer = document.getElementById('male');
     let femaleContainer = document.getElementById('female');

     // Limpiar contenido previo
     maleContainer.innerHTML = '<h2>Hombres</h2>';
     femaleContainer.innerHTML = '<h2>Mujeres</h2>';

     // Iterar sobre los primeros 9 resultados y asignar a contenedores correspondientes
     for (let i = 0; i < 9; i++) {
         let personInfo = `<p>${datoJson.results[i].gender}</p>`;
         if (datoJson.results[i].gender == "male") {
             maleContainer.innerHTML += personInfo;
         } else if (datoJson.results[i].gender == "female") {
             femaleContainer.innerHTML += personInfo;
         } 
    }

            let contador_female=0;
            let contador_male=0;
            for (let i = 0; i < 9; i++){
                if (datoJson.results[i].gender == "female") {
                    contador_female = contador_female + 1; 
                }else{
                    contador_male = contador_male + 1;
                }
            }
            femaleContainer.innerHTML +=`<p>Contador Hombres: ${contador_female}</p>`;
            maleContainer.innerHTML +=`<p>Contador Mujeres: ${contador_male}</p>`;
    });
}