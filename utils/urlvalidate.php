<?php
require_once "print.php";
class URLValidate extends Debug
{
  public static function start($string)
  {
    $string = explode("/", $string);
    // Debug::d($string);
    return $string;
  }
}
