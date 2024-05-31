<?php

namespace Testes;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();
        $crawler = $client->request("GET", "/register");
        $form = $crawler->selectButton("Register")->form();
        $form["username"] = "testuser";
        $form["password"] = "password";
        $client->submit($form);
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains("div.success", "Registration successful");
    }

    public function testLogin()
    {
        $client = static::createClient();
        $crawler = $client->request("GET", "/login");
        $form = $crawler->selectButton("Login")->form();
        $form["username"] = "testuser";
        $form["password"] = "password";
        $client->submit($form);
        $this->assertResponseIsSuccessful();
        $this->assertSelectorTextContains("div.welcome", "Welcome testuser");
    }
}
