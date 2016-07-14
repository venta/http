<?php declare(strict_types = 1);


/**
 * Class ResponseTest
 */
class ResponseTest extends PHPUnit_Framework_TestCase
{

    public function testAppendStringToBody()
    {
        $response = new \Abava\Http\Response();
        $this->assertEmpty($response->getBody()->__toString());
        $result = $response->append('abc');
        $this->assertInstanceOf(\Abava\Http\Contract\ResponseContract::class, $result);
        $this->assertSame($response, $result);
        $this->assertSame($response->getBody(), $result->getBody());
        $this->assertContains('abc', $response->getBody()->__toString());
        $this->assertContains('abc', $result->getBody()->__toString());
    }

}