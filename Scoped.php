<?php
namespace akiyatin\w3c\scoped;
echo '<pre>';
debug_print_backtrace();
class Scoped {
	public static function fix ($html) 
	{
		echo '*';
		return $html;
	}
}


