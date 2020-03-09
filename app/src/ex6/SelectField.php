<?php
declare(strict_types=1);

namespace App\ex6;

/**
 * Class SelectField
 * @package App\ex6
 */
class SelectField
{
    /**
     * Simple array with a few countries
     * @var array|string[]
     */
    protected array $countries;

    /**
     * SelectField constructor.
     */
    public function __construct()
    {
        $this->countries = [
            "Angola",
            "Argentina",
            "Armenia",
            "Australia",
            "Austria",
            "Bolivia",
            "Brazil",
            "Canada",
            "Cape Verde",
            "Chile",
            "China",
            "Colombia",
            "Costa Rica",
            "Cuba",
            "Dominica",
            "Egypt",
            "France",
            "Guatemala",
            "India",
            "Lithuania",
            "Macau",
            "Madagascar",
            "Mexico",
            "Netherlands",
            "Paraguay",
            "Peru",
            "Poland",
            "Portugal",
            "Sudan",
            "Switzerland",
            "United States",
            "Uruguay",
            "Venezuela",
            "Zambia"];
    }

    /**
     * Return an array of countries
     * @return array|string[]
     */
    public function countries()
    {
        return $this->countries;
    }

}