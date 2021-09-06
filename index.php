<?php
require_once "services/Response.php";
require_once "utils/enums.php";
require_once "utils/urlvalidate.php";
require_once "api/index.php";
require_once "pages/index.php";

class Init
{
  public static function start()
  {
    $response = new Response();
    if (isset($_GET['url'])) {
      $url = URLValidate::start($_GET['url']);
      switch ($url[0]) {
          // Login
        case CustomRoute::API:
          ApiHandler::start();
          break;
        case CustomRoute::Home:
          PagesHandler::start();
          break;
          // user Get Dat

        default:
          $response->res(ErrorCode::BAD_REQUEST, "Bad Request");
      }
    } else {
      $response->res(ErrorCode::PARTIAL_CONTENT, "Partial Content");
    }
  }
}
Init::start();
