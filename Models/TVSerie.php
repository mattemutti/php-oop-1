<?php

class TVSerie extends Production
{


	public $season;

	public function __construct($title, $language, $vote, Genre $genre, int $season)
	{
		parent::__construct($title, $language, $vote, $genre);
		$this->season = $season;
	}

	//getters
	public function getSeason()
	{
		return $this->season;

	}

}