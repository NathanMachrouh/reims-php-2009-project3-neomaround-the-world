<?php

namespace App\DataFixtures;

use App\Entity\Live;
use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;
use App\Repository\CountryRepository;


class LiveFixtures extends Fixture implements DependentFixtureInterface
{   
    private $countryRepository;

    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;

    }

    public function getDependencies()  
    {
        return [CountryFixtures::class];  
    }

    public function load(ObjectManager $manager)
    {   
        
        $faker= Faker\Factory::create('fr_FR');

        for ($i = 1; $i <= 40; $i++) {
            $live = new Live();
            $live->setCulture($faker->text($maxNbChars = 500));
            $live->setLife($faker->text($maxNbChars = 500));
            $live->setCountry($this->getReference('country_' . $i));

            $manager->persist($live);
        }

        $manager->flush();
    }
}


