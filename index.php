<?php

require __DIR__ . '/Models/Production.php';
require __DIR__ . '/Models/Genre.php';
require __DIR__ . '/Models/Movie.php';
require __DIR__ . '/Models/TVSerie.php';
require __DIR__ . '/database/db.php';

//var_dump($movies);
//var_dump($donnieDarko->title);


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
			<div class="row justify-content-center text-center g-4">
				<?php foreach ($movies as $movie): ?>
					<div class="col-4">
						<div class="card text-center p-2">
							<h3>Titolo: <?= $movie->title ?></h3>
							<div>Lingua: <?= $movie->language ?></div>
							<div>Voto: <?= $movie->vote ?></div>
							<div>Genere: <?= $movie->genre?->getGenreTitle() ?></div>
							<div>Descrizione Genere: <?= $movie->genre?->getGenreDescription() ?></div>
							<div>
								<?php if (isset($movie->profit)): ?>
									<div>Profitti: <?= $movie->profit ?> </div>
									<div>Durata: <?= $movie->duration ?></div>
								<?php endif; ?>
								<?php if (isset($movie->season)): ?>
									<div>Season <?= $movie->season ?> </div>
								<?php endif; ?>

							</div>
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