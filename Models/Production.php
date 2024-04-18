<?php

class Production
{
	//- All'interno della classe dovrete gestire:- un titolo, - una lingua e - un voto (su una scala da 1 a 10). 
	public $title;
	public $language;
	public $vote;
	public $genre;


	public function __construct(string $title, string $language, int $vote, Genre $genre)
	{
		$this->title = $title;
		$this->language = $language;
		$this->vote = $vote;
		$this->genre = $genre;

	}

	public function greetings()
	{
		return $this->title . ' The film';
	}

}