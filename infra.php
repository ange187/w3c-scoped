<?php
//Интеграция с infrajs

use akiyatkin\w3c\scoped\Scoped;

Event::one('Controller.onshow', function () {
	$html = View::html();
	$html = Scoped:fix($html);
	$html = View::html($html, true);
});