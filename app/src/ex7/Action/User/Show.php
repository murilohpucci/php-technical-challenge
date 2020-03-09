<?php
declare(strict_types=1);

namespace App\ex7\Action\User;

use App\ex7\Domain\User\Service;
use App\ex7\Infrastructure\UserRepository;
use App\Util\Action;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class ShowRegisterAction
 * @package App\ex4\Infrastructure
 */
class Show extends Action
{
    /**
     * {@inheritDoc}
     */
    protected function action(): Response
    {
        return $this->responseJson((new Service(new UserRepository()))->show());
    }

}