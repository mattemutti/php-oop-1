<?php

require __DIR__ . '/Models/Production.php';
require __DIR__ . '/Models/Genre.php';
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/TVSerie.php';
require __DIR__ . '/database/db.php';

//var_dump($movies);
//var_dump($donnieDarko->title);

//Foot site
include __DIR__ . '/layouts/head.php'; ?>


<?php include __DIR__ . '/layouts/header.php'; ?>


<!-- Mani Site -->
<?php include __DIR__ . '/layouts/main.php'; ?>


<!-- Foot Site -->
<?php include __DIR__ . '/layouts/foot.php'; ?>