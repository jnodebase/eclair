<?php

namespace Eclair\Http;

class Request
{
    public static function getMethod()
    {
        return filter_input(INPUT_POST, '_method') ?: $_SERVER['REQUEST_METHOD']; // ?: 값이 없으면 이라는 뜻 ex) '', [], null, 0, '0', false, 초기화 안된 변수
    }

    public static function getPath()
    {
        return $_SERVER['PATH_INFO'] ?? '/'; // ?? => Null 일 경우 ex) null, 초기화 안된 변수
    }
}