<?php
declare(strict_types=1);

namespace App\ex4;

use App\ex4\Domain\Service;
use App\ex4\Infrastructure\RegisterRepository;
use App\Util\Action;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class ShowRegistersAction
 * @package App\ex4
 */
class InsertRegisterAction extends Action
{
    /**
     * Variable to check if in current request there are errors
     * @var bool
     */
    protected bool $hasErrors = false;

    /**
     * {@inheritDoc}
     */
    public function action(): Response
    {
        try {
            $service = new Service(new RegisterRepository());
            $postData = $this->request->getParsedBody();
            $this->validatePostData($postData);

            if (!$this->hasErrors) {
                if ($service->register($postData)) $this->flash->addMessage('success_ex4', 'Registro inserido com sucesso!');
            }
        } catch (\Exception $e) {
            $this->flash->addMessage('errors_ex4', $e->getMessage());
        }
        return $this->response->withStatus(302)->withHeader('Location', '/ex4');
    }

    /**
     * Validate data before pass to domain layer
     * @param array $data
     */
    private function validatePostData(array $data)
    {
        if (empty($data['ex4-name'])) {
            $this->hasErrors = true;
            $this->flash->addMessage('errors_ex4', 'Campo nome inválido!');
        }

        if (empty($data['ex4-lastname'])) {
            $this->hasErrors = true;
            $this->flash->addMessage('errors_ex4', 'Campo sobrenome inválido!');
        }

        if (empty($data['ex4-email'])) {
            $this->hasErrors = true;
            $this->flash->addMessage('errors_ex4', 'Campo email inválido!');
        }

        if (empty($data['ex4-telephone'])) {
            $this->hasErrors = true;
            $this->flash->addMessage('errors_ex4', 'Campo telefone inválido!');
        }

        if (empty($data['ex4-login'])) {
            $this->hasErrors = true;
            $this->flash->addMessage('errors_ex4', 'Campo login inválido!');
        }

        if (empty($data['ex4-password'])) {
            $this->hasErrors = true;
            $this->flash->addMessage('errors_ex4', 'Campo senha inválido!');
        }
    }
}