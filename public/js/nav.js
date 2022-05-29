function activado(numero)
{
    
    for(var i=1;i<=5;i++)
    {
        if(numero==i)
        {
            document.getElementById(i).classList.remove("botondesactivado");
            document.getElementById(i).classList.add("botonactivado");
        }
        else
        {
            document.getElementById(i).classList.remove("botonactivado");
            document.getElementById(i).classList.add("botondesactivado");
        }
    }
}