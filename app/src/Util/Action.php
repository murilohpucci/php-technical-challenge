<?php
declare(strict_types=1);

namespace App\Util;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Flash\Messages;
use Slim\Views\Twig;

/**
 * Class Action
 * @package App\ex4
 */
abstract class Action
{
    /**
     * Request object injected by Slim
     * @var Request
     */
    protected Request $request;

    /**
     * Twig view object
     * @var Twig $view;
     */
    protected Twig $view;

    /**
     * Response object injected by slim
     * @var Response
     */
    protected Response $response;

    /**
     * Session messages
     * @var Messages $flash
     */
    protected ?Messages $flash = null;

    /**
     * Invoke method is usefull
     * @param Request $request
     * @param Response $response
     * @return Response
     */
    public function __invoke(Request $request, Response $response): Response
    {
        $this->request = $request;
        $this->response = $response;
        if (is_null($this->flash)) {
            session_start();
            $this->flash = new Messages();
        }
        $this->view = Twig::fromRequest($request);
        return $this->action();
    }

    /**
     * Executes the action
     * @return Response
     */
    abstract protected function action(): Response;

    /**
     * Basic response with json
     * @param CommonResponse $response
     * @return Response
     */
    protected function responseJson(CommonResponse $response)
    {
        $payload = json_encode($response->toArray());
        $this->response->getBody()->write($payload);
        return $this->response->withHeader('Content-Type', 'application/json')->withStatus($response->getResponseCode());
    }
}