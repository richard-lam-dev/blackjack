<?php
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();
        $client->request("POST", "/api/register", [], [], ["CONTENT_TYPE" => "application/json"], json_encode(["username" => "testuser", "password" => "password"])) ;
        $this->assertResponseIsSuccessful();
    }

    public function testLogin()
    {
        $client = static::createClient();
        $client->request("POST", "/api/login", [], [], ["CONTENT_TYPE" => "application/json"], json_encode(["username" => "testuser", "password" => "password"])) ;
        $this->assertResponseIsSuccessful();
    }
}
