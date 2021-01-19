<?php

namespace App\DataFixtures;

use App\Entity\Opinion;
use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;
use App\Repository\CountryRepository;


class OpinionFixtures extends Fixture implements DependentFixtureInterface
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
            $opinion = new Opinion();
            $opinion->setInterview($faker->url());
            $opinion->setAdvice($faker->text($maxNbChars = 500));
            $opinion->setCountry($this->getReference('country_' . $i));

            $manager->persist($opinion);
        }

        $manager->flush();
    }
}

