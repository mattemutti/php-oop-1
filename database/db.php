<?php

$movies = [

	$batman = new Production('Batman', 'it', 10, new Genre('Action', 'Action movie')),
	$matrix = new Production('Matrix', 'en', 9, new Genre('Fantasy', ' Fantasy movie')),
	$armageddon = new Movie('Armageddon', 'en', 10, new Genre('Science fiction', 'science fiction movie'), 100000, '2.15'),
	$friends = new TVSerie('Friends', 'en', '8', new Genre('Commedia', 'serie tv commedia'), 8),
];
