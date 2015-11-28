<?php
class Parts
{
	private static $titleSticker = "| Vaneev Ramen-YA";
	
	public static function headContent($title){
		$title = $title . " " . self::$titleSticker;	
		self::loadPartTemplate(__METHOD__, array("title" => $title));
	}

	public static function contentBottom(){
		self::loadPartTemplate(__METHOD__);
	}
	
	private static function loadPartTemplate($method, $vars = NULL){
		if($vars)
			extract($vars);
		include_once(__DIR__ . "/". str_replace(__CLASS__ . "::", "", $method) .".php");
	}
}