<div id='app'>

	<div class="container my-4">
		<div class="row justify-content-center text-center g-4">
			<?php foreach ($movies as $movie): ?>
				<div class="col-4">
					<div class="card text-center p-2 shadow p-3 mb-5 bg-body-tertiary rounded">
						<h3>Titolo: <?= $movie->title ?></h3>
						<div>Lingua: <?= $movie->language ?></div>
						<div>Voto: <?= $movie->vote ?></div>
						<div>Genere: <?= $movie->genre?->getGenreTitle() ?></div>
						<div>Descrizione Genere: <?= $movie->genre?->getGenreDescription() ?></div>
						<div>
							<?php if (isset($movie->profit)): ?>
								<div>Profitti: <?= $movie?->profit ?> </div>
								<div>Durata: <?= $movie?->duration ?></div>
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