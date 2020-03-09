<?php
declare(strict_types=1);

namespace App\ex4\Domain\ValueObject;

use App\ex4\Domain\Exception\InvalidTelephone;
use App\Util\Validators\Telephone as TelephoneValidator;

/**
 * Class Telephone
 * @package App\ex4\Domain\ValueObject
 */
class Telephone
{

    /**
     * @var string $telephone Register Telephone
     */
    protected string $telephone;

    /**
     * Telephone constructor.
     * @param string $telephone
     * @throws InvalidTelephone
     */
    public function __construct(string $telephone)
    {
        if (!TelephoneValidator::isValid($telephone)) {
            throw new InvalidTelephone();
        }
        $this->telephone = $telephone;
    }

    /**
     * Returns the telephone string
     * @return string
     */
    public function get(): string
    {
        return $this->telephone;
    }

}