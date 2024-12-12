<!-- Consultando una api -->

<?php
const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesion de curl; ch handle

$ch = curl_init(API_URL);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

/*
Ejecutamos la peticion
Y guardamos el resultado

*/
$result = curl_exec($ch);

// una alternativa seria utilizar file_get_contents
// $result = file_get_contens(API_URL); //Si solo quieres hacer un GET de una API
$data = json_decode($result, true);
curl_close($ch);


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
