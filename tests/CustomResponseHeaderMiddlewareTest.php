<?php

declare(strict_types=1);


class CustomResponseHeaderMiddlewareTest extends TestCase
{
    public function testCustomHeaderExists(): void
    {
        $this->get('/ip');

        $this->assertArrayHasKey('x-hello-world', $this->response->headers->all());
        $this->assertEquals('Vitaly Kustov', $this->response->headers->get('x-hello-world'));
    }
}
