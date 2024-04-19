<?php

class Movie extends Production
{

	public $profit;
	public $duration;

	public function __construct($title, $language, $vote, Genre $genre, int $profit, string $duration)
	{

		parent::__construct($title, $language, $vote, $genre);
		$this->profit = $profit;
		$this->duration = $duration;
	}

	public function getProfit()
	{
		return $this->profit;

	}

	public function getDuration()
	{
		return $this->duration;

	}
}