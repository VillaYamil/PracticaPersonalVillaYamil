function buscar (){
    let id = document.getElementById("id").value;
    let id2 = document.getElementById("id2").value;
    fetch(`https://rickandmortyapi.com/api/character/${id},${id2}`)
    .then(response => response.json())
    .then((data) => {
    console.log(data)
    document.getElementById("info").innerHTML=`
    <h1> Status: ${data[0].status}</h1>
    <h1> Nombre: ${data[0].name}</h1>
    <img src="${data[0].image}">`
    document.getElementById("info2").innerHTML=`
    <h1> Status: ${data[1].status}</h1>
    <h1> Nombre: ${data[1].name}</h1>
    <img src="${data[1].image}">`
    if (data[0].gender == data[1].gender) {
        document.getElementById("tick").innerHTML=
        `<h3>Coinciden</h3>
        <img src="https://thumbs.dreamstime.com/b/el-vector-confirma-tick-icon-confirme-s%C3%ADmbolo-del-icono-de-la-se%C3%B1al-pictograma-plano-se-a%C3%ADsla-en-un-fondo-blanco-dise%C3%B1ado-139405470.jpg" width="100" height="100" />`;
    } else {
        if (data[0].gender != data[1].gender) {
            document.getElementById("tick").innerHTML=
            `<h3>No coinciden</h3>
            <img src="https://3.bp.blogspot.com/-bs0UzJ8_4o0/TVZyE66v4EI/AAAAAAAABLc/aGoH8FK7ZRY/s1600/525px-X_mark_svg.png" width="100" height="100" />`; 
    }}
});
}

