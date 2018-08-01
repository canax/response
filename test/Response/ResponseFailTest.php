<?php

namespace Anax\Response;

use \PHPUnit\Framework\TestCase;

/**
 * Fail test response module.
 */
class ResponseFailTest extends TestCase
{
    /**
     * Test.
     * @expectedException \Anax\Response\Exception
     */
    public function testStatusCode()
    {
        $resp = new Response();
        $resp->setStatusCode(-1);
    }
}
