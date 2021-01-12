<?php 

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;


class CountryControllerTest extends WebTestCase
{
   public function testRegister()
   {
       $client = static::createClient(); // Your app is automatically started using the built-in web server
       $client->request('GET', '/country');

       $this->assertSame(200 ,$client->getResponse()->getStatusCode() );// You can use any PHPUnit assertion
   }
}
