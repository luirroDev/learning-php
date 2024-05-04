<?php
$name = "Luis Ramon";
$isDev = true;
$age = 40;
define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
const nombre = "Javier Miley";

$newAge = $age + '1';

$output = "Hola, soy $name y estoy aprendiendo PHP";
$isOld = $age > 40;

$outputAge1 = match (true) {
  $age < 2  => "Eres un bebé, $name",
  $age < 18 => "Eres un niño, $name",
  $age < 40 => "Eres un adulto, $name",
  default   => "Estas viejo",
};

$outputAge2 = $isOld
  ? "Eres viejo, lo siento"
  : "Eres joven, felicidades";


// if ($isOld) {
//   echo "<h2>Lo siento eres viejo</h2>";
// } else {
//   echo "<h2>Lo siento eres joven</h2>";
// }

$bestLanguages = ["JavaScript", "Python", "Java", "PHP", "C++",];
$bestLanguages[5] = "Flutter";
$bestLanguages[] = "Rubby";
?>

<ul>
  <?php foreach ($bestLanguages as $key => $language) : ?>
    <li><?= $key . " " . $language ?> </li>
  <?php endforeach; ?>
</ul>

<h3>
  El mejor lenguaje es <?= $bestLanguages[3] ?>
</h3>

<h1>
  <?= $outputAge2 ?>
</h1>

<img src="<?= LOGO_URL ?>" alt="">

<style>
  :root {
    color-scheme: light dark;
  }

  body {
    display: grid;
    place-content: center;
  }

  img {
    width: 10rem;
  }
</style>