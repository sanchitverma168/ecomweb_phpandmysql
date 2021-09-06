<?php
require_once "enumService.php";
abstract class DaysOfWeek extends BasicEnum
{
    const currentdaypic = 0;
    const Monday = 1;
    const Tuesday = 2;
    const Wednesday = 3;
    const Thursday = 4;
    const Friday = 5;
    const Saturday = 6;
}
abstract class MyStrings extends BasicEnum
{
    const LoginSuccess = "Login Success";
    const UserID = "user_id";
    const LoginID = "login_id";
    const Password = "password";
    const SuvicharName = "suvichar_name";
    const SuvicharContent = "suvichar_content";
    const Users = "users";
    const Stauts = "stauts";

    public function __construct()
    {
        Enforcer::__add(__CLASS__, get_called_class());
    }
}
abstract class SQL extends BasicEnum
{
    const WHERE = " where ";
    const EQUAL = " = ";
    const ANDD = " and ";
}
abstract class Numbers extends BasicEnum
{
    const ZERO = 0;
    const ONE = 1;
    const TWO = 2;
    const THREE = 3;
    const FOUR = 4;
    const FIVE = 5;
    const SIX = 6;
    const SEVEN = 7;
    const EIGHT = 8;
    const NINE = 9;
}
abstract class ErrorCode extends BasicEnum
{
    //!------------------------------![OK]
    const OK = 200;
    //!------------------------------![CREATED]
    const CREATED = 201;
    //!------------------------------![ACCEPTED]
    const ACCEPTED = 202;
    //!------------------------------![NO CONTENT]
    const NO_CONTENT = 204;
    //!------------------------------![PARTIAL CONTENT]
    const PARTIAL_CONTENT = 206;
    //!------------------------------![MOVED PERMANENTLY]
    const MOVED_PERMANENTLY = 301;
    //!------------------------------![FOUND]
    const FOUND = 302;
    //!------------------------------![BAD REQUEST]
    const BAD_REQUEST = 400;
    //!------------------------------![UNAUTHORISED]
    const UNAUTHORISED = 401;
    //!------------------------------![FORBIDDEN]
    const FORBIDDEN = 403;
    //!------------------------------![NOT FOUND]
    const NOT_FOUND = 404;
    //!------------------------------![METHOD NOT ALLOWED]
    const METHOD_NOT_ALLOWED = 405;
    //!------------------------------![NOT ACCEPTABLE]
    const NOT_ACCEPTABLE = 406;
    //!------------------------------![REQUEST TIMEOUT]
    const REQUEST_TIMEOUT = 408;
    //!------------------------------![INTERNAL SERVER ERROR]
    const INTERNAL_SERVER_ERROR = 500;
    //!------------------------------![NOT IMPLEMENTED]
    const NOT_IMPLEMENTED = 501;
    //!------------------------------![BAD GATEWEAY]
    const BAD_GATEWEAY = 502;
    //!------------------------------![SERVICE UNAVAILABLE]
    const SERVICE_UNAVAILABLE = 503;
    //!------------------------------![GATEWAY TIMEOUT]
    const GATEWAY_TIMEOUT = 504;
    //!------------------------------![HTTP VERSION NOT SUPPORTED]
    const HTTP_VERSION_NOT_SUPPORTED = 505;
    //!------------------------------![NETWORK CONNECT TIMEOUT ERROR]
    const NETWORK_CONNECT_TIMEOUT_ERROR = 599;
    //!------------------------------![NETWORK CONNECT TIMEOUT ERROR]
}
abstract class Method extends BasicEnum
{
    const GET = "GET";
    const POST = "POST";
}
abstract class CustomRoute extends BasicEnum
{
    //  Apis
    // const USERLOGIN = "user-login";
    // const ADDSUVICHAR = "add-suvichar";
    // const CURRENTDAYPICVIEW = "current-day-pic-view";
    // const GETSUVICHARLIST = "get-suvicharlist";
    // const USERGETDATA = "user-getData";
    const API = "api";
    const Home = "";
}
