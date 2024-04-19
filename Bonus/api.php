<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';


$batman = new Production('Batman', 'it', 10, new Genre('Action', 'Action movie'));
$matrix = new Production('Matrix', 'en', 9, new Genre('Fantasy', ' Fantasy movie'));




$movies = [
	[
		'title' => $batman->title,
		'language' => $batman->language,
		'vote' => $batman->vote,
		'genre' => [
			'title_genre' => $batman->genre->title,
			'description' => $batman->genre->description,
		]
	],
	[
		'title' => $matrix->title,
		'language' => $matrix->language,
		'vote' => $matrix->vote,
		'genre' => [
			'title_genre' => $matrix->genre->title,
			'description' => $matrix->genre->description,
		]

	],
];



var_dump($movies);


//$json_string = json_encode($movies);
header('Content-type: application/json');

$json_string = file_get_contents('movies.json');
echo $json_string;