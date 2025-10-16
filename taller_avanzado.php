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

//creamos la funcion 

function encontrarMaximo ($array)
{
    if (empty($array))
        return null;


$maximo = $array[0];
foreach ($array as $numero) 
    {
        if ($numero > $maximo) 
        {
            $maximo = $numero;
        }
    }

    return $maximo;
}


//Creamos un array de números de ejemplo
$listaDeNumeros = [12, 45, 7, 23, 56, 8, 99, 34];

//Llamamos a la función con nuestro array
$valorMasAlto = encontrarMaximo($listaDeNumeros);

//Imprimimos el resultado
echo "El array es: [" . implode(", ", $listaDeNumeros) . "]\n";
echo "El número más alto es: " . $valorMasAlto;


//problema 5
//filtrar usuarios por criterio

$usuarios = [
    ['nombre' => 'Ana', 'edad' => 25, 'activo' => true],
    ['nombre' => 'Juan', 'edad' => 17, 'activo' => true],
    ['nombre' => 'Pedro', 'edad' => 35, 'activo' => false],
    ['nombre' => 'Sofía', 'edad' => 22, 'activo' => true]
];

function filtrarUsuarios($usuarios): array
{
    
    $usuariosFiltrados = [];

    
    foreach ($usuarios as $usuario) {
        if ($usuario['edad'] >= 18 && $usuario['activo'] === true) {
            $usuariosFiltrados[] = $usuario;
        }
    }

    return $usuariosFiltrados;
}

$usuariosActivos = filtrarUsuariosActivosYMayores($usuarios);

//Imprimimos el resultado 
print_r($usuariosActivos);





















?>