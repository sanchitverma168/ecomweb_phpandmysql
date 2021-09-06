<?php
class Debug
{
  public static function d($var)
  {
    switch (gettype($var)) {
      case "integer":
        echo $var;
        break;
      case "double":
        echo $var;
        break;
      case "string":
        echo $var;
        break;
      case "array":
        print_r($var);
        break;
      case "null":
        echo "Variable is Null";
        break;
      case "boolean":
        echo $var;
        break;
    }
    exit();
  }
}
