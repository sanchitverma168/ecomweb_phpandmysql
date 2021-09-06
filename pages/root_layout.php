<?php
require_once "./utils/print.php";
require_once("vendor/autoload.php");

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__ . "/..");
$dotenv->load(".env");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../src/build/css/styles.css">
  <title><?php echo $_ENV["APPNAME"]; ?></title>
</head>

<body>
  <?php
  class RootLayout
  {
    public static function start($url)
    {
      // Debug::d($url);

    }
  }
  ?>
</body>

</html>