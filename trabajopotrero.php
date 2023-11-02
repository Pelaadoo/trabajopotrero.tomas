<?php
echo "<h1>Hola Mundo!</h1>";

echo "<br>";

$variable = 5;
echo $variable;
echo "<br>";
$Variable = "3";  // Corrección: Debería ser "$variable" en lugar de "$Variable".
echo $variable;   // Corrección: Debería ser "$variable" en lugar de "$Variable".
echo "<br>";
echo $Variable;    // Esta línea imprime la variable "$Variable".
echo "<br>";

var_dump($variable);
echo "<br>";
$variable = "4";
var_dump($variable);
echo "<br>";

$numero1 = 4;
$numero2 = 10;

echo $numero1 + $numero2;
echo "<br>";
echo $numero1 - $numero2;
echo "<br>";
echo $numero1 * $numero2;
echo "<br>";
echo $numero2 / $numero1;
echo "<br>";
echo $numero2 % $numero1;

echo "¡Hola, mundo!";

$nombre = "Juan";
$edad = 25;
echo "Mi nombre es $nombre y tengo $edad años.";

function celsiusToFahrenheit($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
}

$celsius = 20;
$fahrenheit = celsiusToFahrenheit($celsius);

echo "$celsius es equivalente a $fahrenheit";

$base = 18;
$altura = 12;

$area = $base * $altura;
$perimetro = 2 * ($base + $altura);

echo "Área del rectángulo: " . $area . " cm^2<br>";
echo "Perímetro del rectángulo: " . $perimetro . " cm";

$radio = 30;

$area = M_PI * pow($radio, 2);
$circunferencia = 2 * M_PI * $radio;

echo "Área del círculo: " . $area . " cm^2<br>";
echo "Circunferencia del círculo: " . $circunferencia . " cm";

$n = 1 - 10;

if ($n > 1) {
    echo "El número ingresado es un número positivo";
}

$n = 5;

if ($n > 1 && $n < 10) {
    echo "El número ingresado es mayor a 1 y menor a 10";
}

$diaSemana = "Miercoles";

switch ($diaSemana) {
    case "Lunes":
        echo "El día de hoy es Lunes";
        echo "<br>";
        break;
    case "Viernes":
        echo "El día de hoy es Viernes";
        echo "<br>";
        break;
    default:
        echo "El día de hoy no es ni Lunes ni Viernes";
        echo "<br>";
}

$n = 5;

if ($n >= 15 || $n < 5) {
    echo "El número ingresado es mayor o igual a 15 o menor a 5";
} else {
    echo "El número ingresado no pudo ser validado";
}

function saludar($nombre, $edad) {
    $nombre .= " Spadoni";
    echo "Hola " . $nombre . "<br>";
    echo "La edad de " . $nombre . " es de " . $edad . "<br>";
}

$variable1 = pow(2, 2) + 4;
echo $variable1 . "<br>";

$variable2 = pow(3, 2) + 4;
echo $variable2 . "<br>";

$nombre = "Marcos";
$edad = 27;
saludar($nombre, $edad);
echo $nombre . "<br>";
saludar("Marcos", 27);

$nombre = "Jose";
saludar("Juan", 32);
saludar("Luca", 24);
saludar("Sebastian", 20);
saludar("Agos", 26);

$variable3 = pow(4, 2) + 4;
echo $variable3 . "<br>";

function modeloSubaDolar($valor) {
    $resultado = pow($valor, 2) + 4;
    return $resultado;
}

$variable4 = modeloSubaDolar(5);
echo $variable4 . "<br>";

$numero = 7;

if ($numero > 5) {
    echo "El número ingresado es mayor a 5";
}

$numero1 = 5;

if ($numero1 === 5) {  // Comprobación estricta de igualdad.
    echo "El número es 5";
    echo "<br>";
}

echo "Esto está por fuera de la estructura del if anidado";

$numero2 = 10;

switch ($numero2) {
    case 1:
        echo "El valor de numero2 es 1";
        echo "<br>";
        break;
    case 3:
        echo "El valor de numero2 es 3";
        echo "<br>";
        break;
    case 5:
        echo "El valor de numero2 es 5";
        echo "<br>";
        break;
    default:
        echo "El valor de numero2 no es una opción válida";
        echo "<br>";
        break;
}

$diaSemana = "Lunes";

switch ($diaSemana) {
    case "Lunes":
        echo "El día de hoy es Lunes";
        echo "<br>";
        break;
    case "Miercoles":
        echo "El día de hoy es Miércoles";
        echo "<br>";
        break;
    default:
        echo "El día de hoy no es ni Lunes ni Miércoles";
        echo "<br>";
}

$numero = 1;

while ($numero < 3) {
    echo "Esta es la iteración número: " . $numero;
    echo "<br>";
    $numero = $numero + 1;
}

echo "Esto está por fuera de la estructura WHILE";
echo "<br>";
echo $numero;
?>
