class Cliente{
    constructor(nombre,apellido,fecha_naciemiento){
    this.nombre=nombre;
    this.apellido=apellido;  
    this.fecha_naciemiento=fecha_naciemiento;
    }
}
class Cuenta_bancaria{
    constructor(saldo,dni){
        this.saldo=saldo;
        this.dni=dni;
}
setDepositar(plata){
    this.saldo=this.saldo+plata; 
    console.log(this.saldo);
}
}
//console.log(Cliente);
//console.log(Cuenta_bancaria);
cliente = new Cliente('Yamil','Villa','14/04/2000');
console.log(cliente);

cuenta = new Cuenta_bancaria(1000,'42487107');
console.log(cuenta);

function depositar_plata(){
    let plata = document.getElementById('plata').value;
    cuenta.setDepositar(parseInt(plata));  
}



















/*pepito=document.getElementById('usuario').value;
 let cliente = new Cliente(pepito);

function cargar_nombre(){
    cliente.nombre = document.getElementById('usuario');
    console.log(cliente.nombre);
}

localStorage.setItem('clave','123');
sessionStorage.setItem('clave','123');
let aux=localStorage.getItem('clave');

let data = {
    nombre:'Yamil',
    age:24,
}
localStorage.setItem('data',JSON.stringify(data));
let aux1 = localStorage.getItem('data');
console.log(JSON.parse(aux1));*/