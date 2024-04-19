<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';



$movies = [

	$batman = new Production('Batman', 'it', 10, new Genre('Action', 'Action movie')),
	$matrix = new Production('Matrix', 'en', 9, new Genre('Fantasy', ' Fantasy movie')),
];






?>

<!doctype html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>OOP_ONE</title>
	<link href='./style.css' rel='stylesheet'>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
	<div id='app'>

		<div class="container my-4">
			<div class="row justify-content-center text-center">
				<?php foreach ($movies as $movie): ?>
					<div class="col-4">
						<div class="card text-center">
							<h3>Titolo: <?= $movie->title ?></h3>
							<h5>Lingua: <?= $movie->language ?></h5>
							<h5>Voto: <?= $movie->vote ?></h5>
							<h4>Genere: <?= $movie->genre->getGenreTitle() ?></h4>
							<h6>Descrizione Genere: <?= $movie->genre->getGenreDescription() ?></h6>
							<p><?= $movie->greetings() ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>


	</div>
	<!-- Development only cdn, disable in production -->
	<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
	<script src='./app.js'></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>
</body>

</html>