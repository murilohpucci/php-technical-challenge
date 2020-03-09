<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

if (PHP_SAPI == 'cli-server') {
    $_SERVER['SCRIPT_NAME'] = basename(__FILE__);

    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use App\ex1\Countries;
use App\ex2\Joaozinho;
use App\ex3\Files;
use App\ex4\InsertRegisterAction;
use App\ex4\ShowRegisterAction;
use App\ex5\Xml;
use App\ex6\SelectField;
use Slim\Psr7\Stream;
use App\ex7\Action\User\Show;
use App\ex7\Action\User\Register;
use App\ex7\Action\User\Delete;
use App\ex7\Action\User\Update;

require __DIR__ . '/vendor/autoload.php';

// Create App
$app = AppFactory::create();

// Create Twig
$twig = Twig::create(__DIR__ . '/public/views');

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

// Application Routes //

$app->get('/', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'home.twig']);
});

$app->get('/ex1', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'ex1.twig', 'countries' => (new Countries())->sortByCapital()]);
});

$app->get('/ex2', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'ex2.twig', 'bite' => Joaozinho::foiMordido()]);
});

$app->get('/ex3', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'ex3.twig', 'extensions' => (new Files())->extensions()]);
});

$app->get('/ex4', ShowRegisterAction::class);
$app->post('/ex4', InsertRegisterAction::class);

$app->get('/ex5', function (Request $request, Response $response) {
    $xmlConverter = new Xml(getenv('DATA_FOLDER') . '/cd_catalog.xml');
    $xmlConverter->toCsv();
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'ex5.twig', 'xml' => $xmlConverter->toString()]);
});

$app->get('/ex5/download', function(Request $request, Response $response) {
    $file = getenv('DATA_FOLDER') . '/xml.csv';
    $convertedFile = fopen($file, 'rb');
    $stream = new Stream($convertedFile);

    return $response->withHeader('Content-Type', 'application/force-download')
        ->withHeader('Content-Type', 'application/octet-stream')
        ->withHeader('Content-Type', 'application/download')
        ->withHeader('Content-Description', 'File Transfer')
        ->withHeader('Content-Transfer-Encoding', 'binary')
        ->withHeader('Content-Disposition', 'attachment; filename="' . basename($file) . '"')
        ->withHeader('Expires', '0')
        ->withHeader('Cache-Control', 'must-revalidate, post-check=0, pre-check=0')
        ->withHeader('Pragma', 'public')
        ->withBody($stream);
});

$app->get('/ex6', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'ex6.twig', 'countries' => (new SelectField())->countries()]);
});

$app->get('/ex7', function (Request $request, Response $response) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'index.twig', ['content' => 'ex7.twig']);
});

$app->get('/ex7/collection', function(Request $request, Response $response) {
    $file = getenv('DATA_FOLDER') . '/postman_collection.json';
    $convertedFile = fopen($file, 'rb');
    $stream = new Stream($convertedFile);
    return $response->withHeader('Content-Type', 'application/force-download')
        ->withHeader('Content-Type', 'application/json')
        ->withHeader('Content-Disposition', 'attachment; filename="' . basename($file) . '"')
        ->withBody($stream);
});

// API group
$app->group('/api/v1', function (Group $group) {
    // User group
    $group->group('/user', function (Group $group) {
        $group->get('/', Show::class);
        $group->put('/', Update::class);
        $group->delete('/', Delete::class);
        $group->post('/', Register::class);
    });
});

$app->addErrorMiddleware(false, true, true);

// Start the application
$app->run();