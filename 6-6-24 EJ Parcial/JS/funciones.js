//let RickAndMorty = 'https://rickandmortyapi.com/api/character';
let RandomUser = 'https://randomuser.me/api/?results=3';
function BuscarRandomUser(){
fetch(RandomUser)
.then(res=>res.json())
.then((data)=> {
    
    let edades = document.getElementById('edad');
    let imagen = document.getElementById('imagen');
    edades.innerHTML='<h1>Edades</h1>';
    let arrayEdad =[];
for (let i = 0; i < 3; i++) {
    let edad = `<p>Edad: ${data.results[i].dob.age}</p>`;
    edades.innerHTML += edad;
    arrayEdad.push(data.results[i].dob.age);
}

let max = Math.max(...arrayEdad)
edades.innerHTML += `<p>Mayor edad: ${max}</p>`;

for (let i = 0; i < 3; i++) {
    let imagen1 = `<img src="${data.results[i].picture.medium}">`
    if (data.results[i].dob.age === max) {
        imagen.innerHTML=imagen1;
    }
    
}
}).catch (function(error){
    if (error.message === 'Failed to fetch')
    {alert('No internet')}else
    {alert('Ocurrio un error: '+ error.message)}
    
})}