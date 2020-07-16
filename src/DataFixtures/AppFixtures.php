<?php

namespace App\DataFixtures;

use App\Entity\Client;
use App\Entity\Product;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Services\PasswordService;

class AppFixtures extends Fixture
{
    public function __construct(PasswordService $passwordService)
    {
        $this->passwordService = $passwordService;
    }

    public function load(ObjectManager $manager)
    {
        $client = new Client;

        $client->setName('an admin');
        $client->setEmail('test@test.fr');
        $client->setPassword($this->passwordService->encode($client, 'test'));
        $client->setRoles(["ROLE_ADMIN"]);
        $manager->persist($client);
        $this->productCatalogue($client, $manager);
        $this->userCatalogue($client, $manager);

        $client = new Client;
        
        $client->setName('a client');
        $client->setEmail('test2@test.fr');
        $client->setPassword($this->passwordService->encode($client, 'test'));
        $client->setRoles(["ROLE_USER"]);
        $manager->persist($client);
        $this->productCatalogue($client, $manager);
        $this->userCatalogue($client, $manager);

        $manager->flush();
    }

    public function productCatalogue(Client $client, ObjectManager $manager)
    {
        $input = array('Apple','Samsung');
        
        for ($i = 0; $i < 10; $i++) {
            $product = new Product();
            $product->setName('product ref'.mt_rand(100,900).'-'.$i);
            $product->setPrice(mt_rand(100, 900));
            $product->setBrand($input[mt_rand(0, count($input) - 1)]);
            $product->setDescription($i.' descriptions and counting...');
            $product->addClient($client);

            $manager->persist($product);
        }
    }

    public function userCatalogue(Client $client, ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->setUsername('username ref'.mt_rand(100,900).'-'.$i);
            $user->setEmail('user'.mt_rand(100,900).'-'.$i.'@test.fr');
            $user->setClient($client);

            $manager->persist($user);
        }
    }
}
