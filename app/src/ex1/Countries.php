<?php
declare(strict_types=1);

namespace App\ex1;

/**
 * Class Countries
 * @package App\ex1
 */
class Countries
{
    /**
     * @var array $location is an array with country and capital. Country as a key and the capital for value
     */
    protected array $location;

    /**
     * Countries constructor fill $location array
     */
    public function __construct()
    {
        $this->location['Espanha'] = 'Madrid';
        $this->location['Brasil'] = 'Brasília';
        $this->location['Mexico'] = 'Cidade do México';
        $this->location['EUA'] = 'Washington';
        $this->location['Argentina'] = 'Bueno Aires';
        $this->location['Japao'] = 'Tóquio';
    }

    /**
     * Sort the locations by capital for each country
     * @return array
     */
    public function sortByCapital(): array
    {
        asort($this->location);
        return $this->location;
    }
}