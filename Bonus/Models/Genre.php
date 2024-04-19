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
}