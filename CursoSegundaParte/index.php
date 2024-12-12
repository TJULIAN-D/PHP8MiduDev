<!-- Consultando una api -->
<?php

//Esto es a nivel de archivo Para que los tipos de ese archivo sean strictos
declare(strict_types=1);
const API_URL = "https://whenisthenextmcufilm.com/api";

function get_data(string $url)
{

  $result = file_get_contents($url); // Si solo vamos a hacer un get de una api

  $data = json_decode($result, true);

  return $data;
}

function get_until_message (int $days): string{
  
}

$data = get_data(API_URL)



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

  <section>
    <pre style="height: 300px; width: 800px; overflow: scroll;"><?= var_dump($data); ?> </pre>
    <div style="text-align: center;">
      <img src="<?= $data['poster_url'] ?>" alt="" style="height: 400px; border-radius: 25px ;">
      <h1> <?= $data['title'] ?> </h1>
      <div> Fecha : <?= $data['release_date'] ?></div>
      <div> Siguiente Pelicula : <?= $data['following_production']['title'] ?></div>
    </div>

  </section>

  <style>
    :root {
      color-scheme: light dark;
    }

    body {
      display: grid;
      place-content: center;
    }
  </style>

</body>

</html>
