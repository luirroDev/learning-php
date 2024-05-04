<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

#Inicializar una nueva sesión de cURL; 
#ch = cURL handle
$ch = curl_init(API_URL);

#Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Una Alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL); // si solo se quiere hacer un GET a una API

#Ejecutar la petición y guardamos el resultado
$result = curl_exec($ch);

#Transformar la data a JSON
$data = json_decode($result, true);

#Cerrar la petición
curl_close($ch);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="La Próxima Película de Marvel">
  <!-- Centered viewport -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
  <title>La Próxima Película de Marvel</title>
</head>

<body>
  <main>
    <!-- <pre style="font-size: 12px; overflow-y: scroll; height: 100px;">
      <?php #var_dump($data) 
      ?>
    </pre> -->
    <section style="display: flex; justify-content: center;">
      <img src="<?= $data["poster_url"]; ?>" alt="Poster de <?= $data["title"] ?>" style="width: 300px; border-radius: 16px; ">
    </section>

    <hgroup style="text-align: center;">
      <h2><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días </h2>
      <p>Fecha de Estreno: <?= $data["release_date"] ?></p>
      <p>La siguiente es: <?= $data["following_production"]["title"] ?></p>
    </hgroup>
  </main>
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