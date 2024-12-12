<!--
 php se puede usar de ambas formas para imprimir textos
 La mejor forma es la corta
 -->
<h1>
  <?php echo "Hola Mundo";  ?>
</h1>

<h1>
  <?= "Hola Mundo";  ?>
</h1>

<?php
//hay que tener presente que las variables tienen reglas para los nombres
//Procuarar usar camelCase

/*
  php es un lenguaje de tipado
   debil    => Va a intentar cambiar los tipos sin importar
   dinamico => no es necesario declarar el tipo de variable
   gradual  =>
  es decir
  podemos sobreescribir variables a como queramos
*/
$name = "Julian";
$isDev = true;
$age = 23;

?>

<div>
  <?= $name ?>
</div>


<!--
var_dump()

Nos da el tipo de dato de una variable y el valor
 -->

<?=
var_dump($name);
var_dump($isDev);
var_dump($age);
?>

<!--
gettype()

Nos da solo el tipo de dato de una variable
 -->

<div><?= gettype($name) ?></div>
<div><?= gettype($isDev) ?></div>
<div><?= gettype($age) ?></div>

<!-- Existen muchos metodos para verificar el tipo de dato ejemplo  -->

<?php

echo is_string($name);
is_bool($isDev);
is_int($age);

?>

<!-- type-casting -->
<!-- nos permite forzar a que uan varible tenga un tipo  -->

<?php
$name2 = (bool) "Julian";

var_dump($name2)
?>

<!-- constantes

No se pueden declarar dos veces
Las constantes no se pueden usar en tiempo de ejecuacion, no deben de depender de tiempo de ejecucion-->

<?php
/*Se usan a nivel global  */
define("LOGO_URL", "https://www.php.net/images/logos/php-logo-white.svg");
echo LOGO_URL;

/*Se usan a nivel de clase o archivos pero funcionan casi igual*/
const NOMBRE = 'JULIAN';
echo NOMBRE;

?>
<h3><?= NOMBRE ?></h3>
<img src="<?= LOGO_URL ?>" alt="" style="height:30px;">

<!-- IF  -->
<?php

$age2 = 25;
$isDev2 = true;

$isOld = $age2 > 40;

if ($isOld) {
  echo "<div>Eres Viejo, Lo siento</div>";
} else {
  echo "<div>Eres Joven</div>";
}

if ($isOld) {
  echo "<div>Eres Viejo, Lo siento</div>";
} else if ($isDev2) {
  echo "<div>No eres viejo, pere eres dev, estas jodido</div>";
} else {
  echo "<div>Eres Joven</div>";
}
?>
<!-- Otra forma de hacer el if, tener muy presento porque suele ser un error a fin de cuentas -->
<?php if ($isOld) : ?>
  <div>Eres Viejo, Lo siento</div>
<?php elseif ($isDev2) : ?>
  <div>No eres viejo, pere eres dev, estas jodido</div>
<?php else : ?>
  <div>Eres Joven</div>
<?php endif; ?>

<!-- Operador ternario -->

<?php
$outputAge = $isOld
  ? "Eres viejo, lo siento"
  : "eres Joven, Felicidades";
?>

<h2><?= $outputAge ?></h2>



<!-- match -->

<?php

/*
  $outputAge2 = match ($age2){
    0,1,2 => "eres un bebe", $name,
    3,4,5,6,7,8,9, 10 => "Eres un Adolecente",
    default => "Eres un Adulto"
  }
*/

/* La mejor forma */
$outputAge2 = match (true) {
  $age2 < 2 => "eres un bebe",
  $age2 < 10 => "Eres un niño",
  $age2 < 18 => "Eres un Adolecente",
  $age2 == 18 => "Eres Mayor de edad",
  $age2 < 40 => "Eres un adulo joven",
  $age2 < 60 => "Eres un adulo viejo",
  default => "Hueles mas a madera que a fruta"
}
?>

<div>saa<?= $outputAge2 ?></div>



<!-- Consultando una api -->

<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesion de curl; ch handle

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true)






?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Centered viewport -->
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css">
</head>

<body>

</body>

</html>
<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>
