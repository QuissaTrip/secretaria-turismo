<?php
	header('Content-Type: text/html; charset=utf-8');
	session_cache_limiter(false);
	session_start();
	error_reporting(E_ALL);

	// Constants
    define('ASSETS', __DIR__ . "/assets");
    define('APP_NAME', "QuissaTrip");
	define("APP_URL", "http://lucascraveiropaes.com/app");
	define("BASE_URL", "http://lucascraveiropaes.com");

	require '../../website/vendor/autoload.php';
	require '../../website/template/functions.php';
	use Psr\Http\Message\RequestInterface as Request;
	use Psr\Http\Message\ResponseInterface as Response;

	$app = new \Slim\App(array(
		'settings' => [
	        'displayErrorDetails' => true
	    ]
	));
    $container = $app->getContainer();
	$container['view'] = function ($container) {
		return new \Slim\Views\PhpRenderer('../../website/template/');
	};

	/*
	 *
	 * Função para ignorar a presença ou a falta de '/' no link
	 *
	 */
	$app->add(function (Request $request, Response $response, callable $next) {
	    $uri = $request->getUri();
	    $path = $uri->getPath();
	    if ($path != '/' && substr($path, -1) == '/') {
	        $uri = $uri->withPath(substr($path, 0, -1));
	        if($request->getMethod() == 'GET')
	            return $response->withRedirect((string)$uri, 301);
	        else
	            return $next($request->withUri($uri), $response);
	    }
	    return $next($request, $response);
	});

	$app->add(function ($req, $res, $next) {
	    $response = $next($req, $res);
	    return $response
	            ->withHeader('Access-Control-Allow-Origin', '*') //dies gewährleistet den Zugriff für alle extere Programme und sollte nur zur Entwicklung genutzt werden
	            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
	            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
	});
	/*
	 *
	 * Fim
	 *
	 */

	$routers = glob('../../website/routes/*.php');

    foreach ($routers as $router) {
        require $router;
    }

    $app->run();
?>
