<?php
declare(strict_types=1);

namespace App\ex4;

use App\ex4\Domain\Service;
use App\ex4\Infrastructure\RegisterRepository;
use App\Util\Action;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class ShowRegisterAction
 * @package App\ex4\Infrastructure
 */
class ShowRegisterAction extends Action
{
    /**
     * {@inheritDoc}
     */
    protected function action(): Response
    {
        return $this->view->render($this->response, 'index.twig', [
            'content'   => 'ex4.twig',
            'registers' => (new Service(new RegisterRepository()))->all(),
            'errors' => $this->flash->getMessage('errors_ex4'),
            'success' => $this->flash->getMessage('success_ex4')
        ]);
    }

}