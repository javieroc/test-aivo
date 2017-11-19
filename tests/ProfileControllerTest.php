<?php

namespace Tests;

class ProfileControllerTest extends BaseTestCase
{
    public function testUserProfileGet()
    {
        $response = $this->runApp('GET', '/profile/facebook/12345');
        $result = json_decode($response->getBody(), true);

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertSame($result['id'], "12345");
    }

    public function testUserProfileGetNotAllowed()
    {
        $response = $this->runApp('GET', '/profile/facebook/123456');
        $result = json_decode($response->getBody(), true);

        $this->assertEquals(400, $response->getStatusCode());
        $this->assertContains('Bad request, user id not exist.', $result['message']);
    }
}
