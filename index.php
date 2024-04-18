<?php

//create un file index.php in cui è definita una classe Production
class Production
{
	//- All'interno della classe dovrete gestire:- un titolo, - una lingua e - un voto (su una scala da 1 a 10). 
	public $title;
	public $language;
	public $vote;


	public function __construct(string $title, string $language, int $vote)
	{
		$this->title = $title;
		$this->language = $language;
		$this->vote = $vote;
	}
}



?>

<!doctype html>
<html lang='en'>

<head>
	<meta charset='utf-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<title>OOP_ONE</title>
	<link href='./style.css' rel='stylesheet'>
</head>

<body>
	<div id='app'>
		<h1>Hello World</h1>



	</div>
	<!-- Development only cdn, disable in production -->
	<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
	<script src='./app.js'></script>
</body>

</html>