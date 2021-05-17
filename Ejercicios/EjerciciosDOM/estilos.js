//Ejercicio 1
function colorC(aux) 
{
    aux.style.color = "blue";
}
//Ejercicio 2
function select(col)
{
/* Para obtener el valor */
    var cod = document.getElementById("colores").value;
    alert(cod);
}
//Ejercicio 3
function num(numeros)
{
/* Para obtener el valor de los numeros*/    
    var anum = document.getElementsByName("numeros").value;
    alert(anum);
}
//Ejercicio 4
function clic(aux1)
{
    var click = document.getElementById("textarea").innerHTML;
    alert(click);

}
//Ejercicio 5
function suma(num1, num2)
{
    var total;
    var x=document.getElementsByName("valor1").value;
    var y=document.getElementsByName("valor2").value;
    
    if (isNaN(x) || isNaN(y)) {
        
        alert ('Ingrese numeros validos');
    }else {
        total=Number(x) + Number(y);

    }
    
    document.getElementsByName("resultado").value=total;

}
//Ejercicio 6
document.getElementById("div1").style.backgroundColor = "red";
document.getElementById("div1").style.color = "blue";