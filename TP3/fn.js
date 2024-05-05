//console.log("ok")
function searchUser(){
    //console.log("ok2")
    const urlRandomSearch = `https://randomuser.me/api/`;
    fetch(urlRandomSearch)
    .then (Response => Response.json())
    .then((data)=>{
        let latitud = data.results[0].location.coordinates.latitude;
        let longitud = data.results[0].location.coordinates.longitude;
        //console.log(latitud)
        //console.log(longitud)
        var map = L.map('map').setView([51.505, -0.09], 13);
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            var marker = L.marker([51.5, -0.09]).addTo(map)

            var circle = L.circle([51.508, -0.11], {                             //crea un marcador circular
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 500
            }).addTo(map);

            var polygon = L.polygon([                                            //crea un marcador con forma de poligono
                [51.509, -0.08],
                [51.503, -0.06],
                [51.51, -0.047]
            ]).addTo(map);

            marker.bindPopup("<b>Hello mundo!</b><br>I am a popup/marcador. ").openPopup(); //ventana emergente
            circle.bindPopup("Soy un circulo.");
            polygon.bindPopup("Soy un poligono.");

            var popup = L.popup()                                                 //ventanas emergentes como capas
            .setLatLng([51.513, -0.09])
            .setContent("I am a standalone popup/marcador.")
            .openOn(map);

            function onMapClick(e) {                                              //permite reaccionar a la interacción del usuario
                alert("Hiciste clic en el mapa en " + e.latlng);
            }  
            map.on('click', onMapClick);

            var popup = L.popup();

            function onMapClick(e) {                                               //una ubicación en la que se produjo el clic
                popup
                    .setLatLng(e.latlng)
                    .setContent("Hiciste clic en el mapa en" + e.latlng.toString())
                    .openOn(map);
            }
            map.on('click', onMapClick);
         })
         .catch(error =>{                                                         //muestra un mensaje de error al querer presionar 2 veces buscar
            document.getElementById("error").innerHTML="<h1>Hay un error facha</h1>"
         })
   // function CreateMap(){
    };
    //para poder poner la imagen y la sombra del marcador hay que descargarla y guardarla en una carpeta donde este guardo el proyecto