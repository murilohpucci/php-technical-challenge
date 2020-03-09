<?php
declare(strict_types=1);

namespace App\Util;

/**
 * Class CommonResponse
 * @package App\ex7\Domain
 */
class CommonResponse
{
    /**
     * Array of possible errors
     * @var array $errors
     */
    protected array $errors = [];

    /**
     * Array with posible data
     * @var array $data
     */
    protected array $data = [];

    /**
     * Simple message
     * @var string $message
     */
    protected string $message = "";

    /**
     * Status code of response
     * @var int $responseCode
     */
    protected int $responseCode = 0;

    /**
     * Add error to errors array
     * @param string $error
     * @return $this
     */
    public function addError(string $error): self
    {
        if (!empty($error)) {
            $this->errors[] = $error;
        }
        return $this;
    }

    /**
     * Set the message
     * @param string $mesage
     * @return $this
     */
    public function setMessage(string $mesage): self
    {
        if (!empty($mesage)) {
            $this->message = $mesage;
        }
        return $this;
    }

    /**
     * Set response code
     * @param int $responseCode
     * @return $this
     */
    public function setResponseCode(int $responseCode): self
    {
        if (!empty($responseCode)) {
            $this->responseCode = $responseCode;
        }
        return $this;
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }

    /**
     * Get message
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * Get response code
     * @return int
     */
    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    /**
     * Retur formatted array of response
     * @return array
     */
    public function toArray(): array
    {
        return [
            "errors" => $this->errors,
            "message" => $this->message,
            "data" => $this->data
        ];
    }

    /**
     * Returns if there is error
     * @return bool
     */
    public function hasErrors(): bool
    {
        return !empty($this->errors);
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setData(array $data): self
    {
        if (!empty($data)) {
            $this->data = $data;
        }
        return $this;
    }
}