<?php

require_once './vendor/autoload.php';

use Eclair\Database\Adaptor;
use Eclair\Http\Request;
use Eclair\Routing\Route;
use Eclair\Routing\Middleware;
use Eclair\Session\DatabaseSessionHandler;
use Eclair\Support\ServiceProvider;
use Eclair\Application;

/* Database Adapter Example

Adaptor::setup('mysql:dbname=jnodebase_php_study', 'root', 'jeon0903!@');

class Post
{

}

$posts = Adaptor::getAll('SELECT * FROM cache', [], Post::class);
var_dump($posts);

*/

/* Http Request Example

// $_SERVER['REQUEST_METHOD'] = 'GET';
// $_SERVER['PATH_INFO'] = '/posts/write';
var_dump(Request::getPath());

*/

/* Routing Example

Adaptor::setup('mysql:dbname=jnodebase_php_study', 'root', 'jeon0903!@');

class HelloMiddleware extends Middleware
{
    public static function process()
    {
        return true;
    }
}


Route::add('get', '/', function () {
    echo 'Hello, world';
}, [ HelloMiddleware::class ]);

Route::add('get', '/posts/{id}', function ($id) {
    if($post = Adaptor::getAll('SELECT * FROM cache WHERE `key` = ?', [$id])) {
        return var_dump($post);
    }
    http_response_code(404);
});

Route::run();

*/

/* Session Example

Adaptor::setup('mysql:dbname=jnodebase_php_study', 'root', 'jeon0903!@');

session_set_save_handler(new DatabaseSessionHandler);

session_start();

$_SESSION['message'] = 'Hello, world';
$_SESSION['foo'] = new stdClass();

*/

/* Application - Support Example

class SessionServiceProvider extends ServiceProvider
{
    public static function register()
    {
        //session_set_save_handler
    }

    public static function boot()
    {
        session_start();
    }
}

$app = new Application([
    SessionServiceProvider::class
]);

$app->boot();

*/


/* 패키지 업로드

// 깃에 올리고
// Packagist 에 로그인 후
// Submit package 페이지에서 깃헙 주소를 적고
// 체크 버튼 누르면 업로드 가능

*/