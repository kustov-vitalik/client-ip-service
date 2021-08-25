<?php

class ClientIpControllerTest extends TestCase
{
    public function testIp(): void
    {
        $this->get('/ip');

        $this->assertResponseOk();

        $content = $this->response->getContent();
        $this->assertJson($content);
        $this->assertJsonStringEqualsJsonString('{"ip":"127.0.0.1"}', $content);
    }

    public function testIpWithNameParam(): void
    {
        $this->get('/ip?name=T st');

        $this->assertResponseOk();

        $content = $this->response->getContent();
        $this->assertJson($content);
        $this->assertJsonStringEqualsJsonString('{"ip":"127.0.0.1", "greeting":"Hello, T st!"}', $content);
    }
}
