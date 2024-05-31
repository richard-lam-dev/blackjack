<?php

namespace Testes;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CreateUserTypeTest extends WebTestCase
{
    public function testCreateUserFormDisplay()
    {
        $client = static::createClient();
        $crawler = $client->request("GET", "/path/to/create/user"); // Remplacez par le chemin correct

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
    }

    public function testCreateUserFormSubmission()
    {
        $client = static::createClient();
        $crawler = $client->request("GET", "/path/to/create/user"); // Remplacez par le chemin correct

        $form = $crawler->selectButton("Submit")->form(); // Remplacez "Submit" par le texte du bouton de soumission
        $form["email"] = "testuser@example.com";
        $form["password"] = "password";
        $form["username"] = "testuser";

        $client->submit($form);

        $this->assertResponseRedirects('/path/after/submission'); // Remplacez par le chemin après la soumission
    }
}
