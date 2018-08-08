<?php

namespace Anax\Response;

use \PHPUnit\Framework\TestCase;

/**
 * Test response module.
 */
class ResponseTest extends TestCase
{
    /**
     * Provider status codes.
     */
    public function statusCodesProvider()
    {
        return [
            [200],
            [400],
            [403],
            [404],
            [405],
            [500],
            [501],
        ];
    }



    /**
     * Try setting various status codes.
     *
     * @dataProvider statusCodesProvider
     */
    public function testStatusCodes($code)
    {
        $res = new Response();
        $res->setStatusCode($code);
        $result = $res->getStatusCode();
        $this->assertEquals($code, $result);
    }



    /**
     * Test.
     */
    public function testBody()
    {
        $resp = new Response();
        $exp = "body";
        $resp->setBody($exp);
        $res = $resp->getBody();
        $this->assertEquals($exp, $res);
    }
}
