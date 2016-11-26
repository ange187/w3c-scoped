<?php
//Интеграция с infrajs

use akiyatkin\w3c\scoped\Scoped;
use infrajs\event\Event;
use infrajs\view\View;
Event::one('Controller.onshow', function () {

	$html = View::html();
	echo '-';
	$html = Scoped::fix($html);
	$html = View::html($html, true);
});