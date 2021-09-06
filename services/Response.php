<?php

class Response
{
    public static function res($code, $message, $data = null)
    {
        http_response_code($code);
        $response['status'] = $code;
        $response['status_message'] = $message;
        $response['data'] = $data;
        echo json_encode($response);
    }

}
