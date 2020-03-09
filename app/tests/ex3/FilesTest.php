<?php

namespace Test\App\ex3;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\ex3\Files;

/**
 * Class FilesTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
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
        /** @todo Maybe add some arguments to this constructor */
        $this->files = new Files();
    }

    /**
     * @covers \App\ex3\Files::__construct
     */
    public function testConstruct(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\ex3\Files::extensions
     */
    public function testExtensions(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
