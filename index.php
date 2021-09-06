<?php
require_once("vendor/autoload.php");
require_once "services/Response.php";
require_once "utils/enums.php";
require_once "utils/urlvalidate.php";
require_once "api/index.php";
require_once "pages/index.php";
require_once "pages/root_layout.php";

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__ . "/..");
$dotenv->load(".env");
class Init
{
  public  function start()
  {
    $this->globalInit();
    $response = new Response();
    if (isset($_GET['url'])) {
      $url = URLValidate::start($_GET['url']);
      switch ($url[0]) {
          // Login
        case CustomRoute::API:
          ApiHandler::start();
          break;
        case CustomRoute::Home:
          RootLayout::start($url);
          break;
          // user Get Dat

        default:
          $response->res(ErrorCode::BAD_REQUEST, "Bad Request");
      }
    } else {
      $response->res(ErrorCode::PARTIAL_CONTENT, "Partial Content");
    }
  }
  private static function globalInit()
  {
    foreach ($_ENV as $u => $value) {
      global $u;
    }
  }
}
$i = new Init();
$i->start();
