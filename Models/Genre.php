<?php

class Genre
{
	public $title;
	public $description;

	public function __construct(string $title, string $description)
	{
		$this->title = $title;
		$this->description = $description;

	}


	//getters - restituiscono

	public function getGenreTitle()
	{
		return $this->title;
	}

	public function getGenreDescription()
	{
		return $this->description;
	}



}