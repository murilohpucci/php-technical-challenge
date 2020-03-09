<?php
declare(strict_types=1);

namespace App\ex7\Domain\User;

use App\Util\CommonResponse;
use App\Util\Validators\Email;
use App\Util\Validators\Telephone;

/**
 * Class Service
 * @package App\ex7\Domain\User
 */
class Service
{
    /**
     * Repository layer object
     * @var Repository $repository
     */
    protected Repository $repository;

    /**
     * Common response
     * @var CommonResponse $response
     */
    protected CommonResponse $response;

    /**
     * Service constructor injects the reposotory implementation
     * @param Repository $repository
     */
    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
        $this->response = new CommonResponse();
    }

    /**
     * Register a user and return an array
     * @param array $data
     * @return CommonResponse
     */
    public function register(array $data): CommonResponse
    {
        $this->validateCommonPostPutData($data);
        if ($this->response->hasErrors()) {
            $this->response->setResponseCode(422);
            return $this->response;
        }

        $user = new Entity($data['name'], $data['last_name'], $data['email'], $data['telephone']);

        if (!$this->repository->save($user)) {
            $this->response->setResponseCode(500);
            $this->response->addError("Erro ao salvar novo usuário!");
            return $this->response;
        }

        $this->response->setResponseCode(201);
        $this->response->setMessage("Usuário salvo com sucesso");
        return $this->response;
    }


    /**
     * Show all users
     * @return CommonResponse
     */
    public function show(): CommonResponse
    {
        $this->response->setResponseCode(200);
        $this->response->setData($this->repository->getAll());
        return $this->response;
    }

    /**
     * Delete a user by email
     * @param array $data
     * @return CommonResponse
     */
    public function delete(array $data): CommonResponse
    {
        if (empty($data['email'])) {
            $this->response->addError("Campo email vazio!");
        } else if (!Email::isValid((string) $data['email'])) {
            $this->response->addError("Campo email está com o formato incorreto!");
        }

        if ($this->response->hasErrors()) {
            $this->response->setResponseCode(422);
            return $this->response;
        }

        if (!$this->repository->deleteByEmail($data['email'])) {
            $this->response->setResponseCode(500);
            $this->response->addError("Erro ao excluir usuário!");
            return $this->response;
        }

        $this->response->setResponseCode(202);
        $this->response->setMessage("Usuário excluido com sucesso");
        return $this->response;
    }

    /**
     * Update a user by email
     * @param array $data
     * @return CommonResponse
     */
    public function update(array $data): CommonResponse
    {
        $this->validateCommonPostPutData($data);
        if ($this->response->hasErrors()) {
            $this->response->setResponseCode(422);
            return $this->response;
        }

        $user = new Entity($data['name'], $data['last_name'], $data['email'], $data['telephone']);

        if (!$this->repository->update($user)) {
            $this->response->setResponseCode(500);
            $this->response->addError("Erro ao atualizar usuário!");
            return $this->response;
        }

        $this->response->setResponseCode(200);
        $this->response->setMessage("Usuário atualizado sucesso");
        return $this->response;
    }

    /**
     * For both post and put methods, all the data will be checked the same way
     * @param array $data
     */
    private function validateCommonPostPutData(array $data): void
    {
        if (empty($data['name'])) {
            $this->response->addError("Campo nome vazio!");
        }

        if (empty($data['last_name'])) {
            $this->response->addError("Campo sobrenome vazio!");
        }

        if (empty($data['email'])) {
            $this->response->addError("Campo email vazio!");
        } else if (!Email::isValid((string) $data['email'])) {
            $this->response->addError("Campo email está com o formato incorreto!");
        }

        if (empty($data['telephone'])) {
            $this->response->addError("Campo telefone vazio!");
        } else if (!Telephone::isValid((string) $data['telephone'])) {
            $this->response->addError("Campo telefone está com o formato incorreto!");
        }
    }
}