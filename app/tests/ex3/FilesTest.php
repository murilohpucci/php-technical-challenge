<?php

namespace Test\App\ex3;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex3\Files;

/**
 * Class FilesTest.
 * @covers \App\ex3\Files
 */
class FilesTest extends TestCase
{
    /**
     * @var Files $files An instance of "Files" to test.
     */
    private $files;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->files = new Files();
    }

    /**
     * @covers \App\ex3\Files::extensions
     */
    public function testExtensions(): void
    {
        $expected = ['jpeg', 'mov', 'mp4'];
        $this->assertEquals($expected, $this->files->extensions());
    }
}
