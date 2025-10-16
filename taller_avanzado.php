<?php
//nivel 1
//problema 1
//creamos la funcion

function calcularDescuento($precio, $categoria) {   

    if ($categoria == "electronica")
    {
        $descuento = $precio * 0.15;
    }else if ($categoria == "ropa")
    {
        $descuento = $precio * 0.10;
    }else{
        $descuento = $precio * 0.5;
    }

    $precioFinal = $precio - $descuento;
    return $precioFinal;
}


$precioFinal = calcularDescuento(70, "alimentacion");
echo $precioFinal;


echo "</br>";

//problema 2    

//realizamos la funcion
function fizzBuzz ($numero)
{
    if ($numero % 3 == 0 && $numero % 5 == 0)
    {
        echo "FizzBuzz";
    }

    if ($numero % 3 == 0)
    {
        echo "Fizz";
    }

    if ($numero % 5 == 0)

    {
        echo "Buzz";
    }

    if ($numero % 3 != 0 && $numero % 5 != 0)

    {
        echo $numero;
    }
}

fizzBuzz(4);

echo "</br>";
//actividad 3
//creamos la funcion para validar ña contraseña

function validarContraseña($pass)
{
  $longitud = strlen($pass);
  strtoupper($pass);
  $patron = "/[0-9]/";
    preg_match($patron, $pass);

  if ($longitud <= 8)
  {
    echo "DÉBIL";
  }

  if ($longitud >= 8 && strtoupper($pass) != $pass && preg_match($patron, $pass))
  {
    echo "FUERTE";
  }

   if ($longitud >= 8 || strtoupper($pass) === $pass)
  {
    echo "MEDIA";
  }
}

validarContraseña("jwjsssssssss4");

echo "</br>";

//nivel 2
//problema 4









?>