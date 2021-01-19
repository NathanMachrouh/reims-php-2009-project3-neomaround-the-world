<?php

namespace App\DataFixtures;

use App\Entity\Cost;
use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;
use App\Repository\CountryRepository;


class CostFixtures extends Fixture implements DependentFixtureInterface
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
            $cost = new Cost();
            $cost->setFood($faker->numberBetween(100, 2500));
            $cost->setTransport($faker->numberBetween(100, 2500));
            $cost->setAccomodation($faker->numberBetween(100, 2500));
            $cost->setExtra($faker->numberBetween(100, 2500));
            $cost->setCountry($this->getReference('country_' . $i));

            $manager->persist($cost);
        }

        $manager->flush();
    }
}

