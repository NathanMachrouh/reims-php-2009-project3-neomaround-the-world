<?php

namespace App\DataFixtures;

use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }


    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $contributor = new User();
        $contributor->setEmail('massinta.aitbraham@gmail.com');
        $contributor->setRoles(['ROLE_CONTRIBUTOR']);
        $contributor->setName('Mass');
        $contributor->setPassword($this->passwordEncoder->encodePassword(
            $contributor,
            'password'
        )
        );

        $manager->persist($contributor);
        $this->addReference('contributor_1', $contributor);

        // Création d’un utilisateur de type “administrateur”
        $admin = new User();
        $admin->setEmail('machrouh.nathan@gmail.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setName('Nathan');
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            'password'
        ));

        $manager->persist($admin);

        $manager->flush();
    }
}
