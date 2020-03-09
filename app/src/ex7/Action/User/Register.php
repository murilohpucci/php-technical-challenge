<?php
declare(strict_types=1);

namespace App\ex7\Action\User;

use App\ex7\Domain\User\Service;
use App\ex7\Infrastructure\UserRepository;
use App\Util\Action;
use App\Util\CommonResponse;
use App\Util\Validators\Json;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class ShowRegistersAction
 * @package App\ex4
 */
class Register extends Action
{
    /**
     * {@inheritDoc}
     */
    protected function action(): Response
    {
        $isAJsonRequest = Json::validate($this->request);
        if (!is_null($isAJsonRequest)) {
            return $this->responseJson($isAJsonRequest);
        }

        $data = json_decode($this->request->getBody()->getContents(), true);
        return $this->responseJson((new Service(new UserRepository(getenv('DATA_FOLDER') . '/usuarios.txt')))->register($data));
    }
}