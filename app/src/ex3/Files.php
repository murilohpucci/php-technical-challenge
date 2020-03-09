<?php
declare(strict_types=1);

namespace App\ex3;

/**
 * Class Files
 * @package App\ex2
 */
class Files
{
    /**
     * @var array $files is responsable for save the filenames and types
     */
    protected array $files;

    /**
     * Files constructor starts files array with complete name of a file
     */
    public function __construct()
    {
        $this->files[] = 'music.mp4';
        $this->files[] = 'video.mov';
        $this->files[] = 'imagem.jpeg';
    }

    /**
     * Extension function remount the $files array to provide the file as array key and extension as value sorted
     * by extension name
     * @return array
     */
    public function extensions(): array
    {
        $extensions = [];

        foreach ($this->files as $file) {
            $fileData = pathinfo($file);
            if (!empty($fileData['extension'])) {
                $extensions[] = $fileData['extension'];
            }
        }

        asort($extensions);

        return array_values($extensions);
    }
}