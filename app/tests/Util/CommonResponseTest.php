<?php

namespace Test\App\Util;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use App\Util\CommonResponse;

/**
 * Class CommonResponseTest.
 *
 * @author Murilo Pucci <murilohpucci@gmail.com>.
 *
 * @covers \App\Util\CommonResponse
 */
class CommonResponseTest extends TestCase
{
    /**
     * @var CommonResponse $commonResponse An instance of "CommonResponse" to test.
     */
    private $commonResponse;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        /** @todo Maybe add some arguments to this constructor */
        $this->commonResponse = new CommonResponse();
    }

    /**
     * @covers \App\Util\CommonResponse::addError
     */
    public function testAddError(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\Util\CommonResponse::setMessage
     */
    public function testSetMessage(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->commonResponse))
            ->getProperty('message');
        $property->setAccessible(true);
        $this->commonResponse->setMessage($expected);

        $this->assertSame($expected, $property->getValue($this->commonResponse));
    }

    /**
     * @covers \App\Util\CommonResponse::setResponseCode
     */
    public function testSetResponseCode(): void
    {
        $expected = 42;

        $property = (new \ReflectionClass($this->commonResponse))
            ->getProperty('responseCode');
        $property->setAccessible(true);
        $this->commonResponse->setResponseCode($expected);

        $this->assertSame($expected, $property->getValue($this->commonResponse));
    }

    /**
     * @covers \App\Util\CommonResponse::getErrors
     */
    public function testGetErrors(): void
    {
        $expected = ["a", "strings", "array"];

        $property = (new \ReflectionClass($this->commonResponse))
            ->getProperty('errors');
        $property->setAccessible(true);
        $property->setValue($this->commonResponse, $expected);

        $this->assertSame($expected, $this->commonResponse->getErrors());
    }

    /**
     * @covers \App\Util\CommonResponse::getMessage
     */
    public function testGetMessage(): void
    {
        $expected = "a string to test";

        $property = (new \ReflectionClass($this->commonResponse))
            ->getProperty('message');
        $property->setAccessible(true);
        $property->setValue($this->commonResponse, $expected);

        $this->assertSame($expected, $this->commonResponse->getMessage());
    }

    /**
     * @covers \App\Util\CommonResponse::getResponseCode
     */
    public function testGetResponseCode(): void
    {
        $expected = 42;

        $property = (new \ReflectionClass($this->commonResponse))
            ->getProperty('responseCode');
        $property->setAccessible(true);
        $property->setValue($this->commonResponse, $expected);

        $this->assertSame($expected, $this->commonResponse->getResponseCode());
    }

    /**
     * @covers \App\Util\CommonResponse::toArray
     */
    public function testToArray(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\Util\CommonResponse::hasErrors
     */
    public function testHasErrors(): void
    {
        /** @todo Complete this unit test method. */
        $this->markTestIncomplete();
    }

    /**
     * @covers \App\Util\CommonResponse::setData
     */
    public function testSetData(): void
    {
        $expected = ["a", "strings", "array"];

        $property = (new \ReflectionClass($this->commonResponse))
            ->getProperty('data');
        $property->setAccessible(true);
        $this->commonResponse->setData($expected);

        $this->assertSame($expected, $property->getValue($this->commonResponse));
    }
}
