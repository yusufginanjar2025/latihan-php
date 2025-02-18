<?php
  $pageTitle = "Pika Pika";
  $pageDescription = "Pokemon adalah waralaba media yang dimiliki oleh Nintendo, Pokemon diciptakan oleh Satoshi Tajiri dan Ken Sugimori, dan merupakan waralaba Nintendo yang paling sukses dan menguntungkan, yang terdiri dari permainan video, kartu perdagangan, dan permainan peran (RPG) yang dimainkan oleh jutaan orang di seluruh dunia.";
  $pageImage = "gambar-pokemon.jpeg";
?>


<!doctype html>
<html lang="en">
  <head>
    <title><?= $pageTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 align-self-center">
          <div>
            <h1><?= $pageTitle ?></h1>
            <p><?= $pageDescription ?></p>
          </div>
          </div>
        <div class="col-12 col-md-6">
          <img src="gambar-pokemon.jpeg" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </body>
</html>