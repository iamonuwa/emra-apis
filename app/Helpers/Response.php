<?php

namespace App\Helpers;

class Response
{
    public static function unauthorized($data = []) {
        return self::sendError($data, 401);
    }

    public static function internalServerError($data = []) {
       return self::sendError($data, 500);
    }

    public static function genericError($data = [], $http_status_code) {
        return self::sendError($data, $http_status_code);
    }

    public static function error($data = []) {
       return self::sendError($data, 400);
    }

    public static function success($data = []) {
        return self::sendSuccess($data, 200);
    }

    public static function notFound($data = []) {
        return self::sendError($data, 404);
    }

    private static function sendSuccess($data = [], $http_status_code) {
        return response()->json(['success' => true, 'code' => $http_status_code, 'data' => $data]);
    }

    private static function sendError($data = [], $http_status_code) {
        return response()->json(['success' => false, 'code' => $http_status_code, 'error' => $data]);
    }
}