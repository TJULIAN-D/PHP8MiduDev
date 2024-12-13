<section>
  <pre style="height: 300px; width: 800px; overflow: scroll;"><?= var_dump($data); ?> </pre>
  <div style="text-align: center;">
    <img src="<?= $data['poster_url'] ?>" alt="" style="height: 400px; border-radius: 25px ;">
    <h1> <?= $data['title'] . " - " . $untilMessage ?> </h1>
    <div> Fecha : <?= $data['release_date'] ?></div>
    <div> Siguiente Pelicula : <?= $data['following_production']['title'] ?></div>
  </div>

</section>
