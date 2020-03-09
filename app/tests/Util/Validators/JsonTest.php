<?php

namespace Test\App\Util\Validators;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Util\Validators\Json;
use Psr\Http\Message\ServerRequestInterface;
use App\Util\CommonResponse;

/**
 * Class JsonTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\Util\Validators\Json
 */
class JsonTest extends TestCase
{
    /**
     * @var Json $json An instance of "Json" to test.
     */
    private $json;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->json = new Json();
    }

    /**
     * @covers \App\Util\Validators\Json::validate
     */
    public function testValidate(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }
}
