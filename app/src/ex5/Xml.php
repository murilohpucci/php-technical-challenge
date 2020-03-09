<?php
declare(strict_types=1);

namespace App\ex5;

use SimpleXMLElement;

/**
 * Class Xml
 * @package App\ex5
 */
class Xml
{
    /**
     * XML Filepath
     * @var string
     */
    protected string $filePath;

    /**
     * XML file
     * @var SimpleXMLElement|null
     */
    protected ?SimpleXMLElement $xml;

    /**
     * Xml constructor.
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;

        $file = simplexml_load_file($this->filePath);
        if (!$file) {
            throw new \Exception('Erro ao carregar o arquivo XML');
        }

        $this->xml = $file;
    }

    /**
     * Convert a XML to CSV and saves at server
     * @return bool
     */
    public function toCsv(): bool
    {
        $outputPath = getenv('DATA_FOLDER') . '/xml.csv';
        $csvFile = fopen($outputPath, 'w');
        chmod($outputPath, 0644);

        $header=false;
        foreach($this->xml as $keyHeader => $description){
            if(!$header){
                fputcsv($csvFile,array_keys(get_object_vars($description)));
                $header=true;
            }
            fputcsv($csvFile,get_object_vars($description));
        }
        fclose($csvFile);
        return true;
    }

    /**
     * Returns XML to string
     * @return string
     */
    public function toString(): string
    {
        return $this->xml->asXML();
    }
}