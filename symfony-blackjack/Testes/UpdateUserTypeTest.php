<?php

namespace Testes;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UpdateUserTypeTest extends WebTestCase
{
    public function testUpdateUserFormDisplay()
    {
        $client = static::createClient();
        $crawler = $client->request("GET", "/path/to/update/user"); // Remplacez par le chemin correct

        $this->assertResponseIsSuccessful();
        $this->assertSelectorExists('form');
    }

    public function testUpdateUserFormSubmission()
    {
        $client = static::createClient();
        $crawler = $client->request("GET", "/path/to/update/user"); // Remplacez par le chemin correct

        $form = $crawler->selectButton("Submit")->form(); // Remplacez "Submit" par le texte du bouton de soumission
        $form["email"] = "updateduser@example.com";
        $form["password"] = "newpassword";
        $form["username"] = "updateduser";
        $form["wallet"] = 100;

        $client->submit($form);

        $this->assertResponseRedirects('/path/after/submission'); // Remplacez par le chemin après la soumission
    }
}
