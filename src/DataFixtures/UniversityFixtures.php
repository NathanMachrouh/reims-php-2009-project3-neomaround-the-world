<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;
use App\Entity\University;

class UniversityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $allUniversityData = [
            ['name' => 'Universidad del Salvador', 'latitude' => '-34.5993824', 'longitude' => '-58.3926947'],
            ['name' => 'Deakin University', 'latitude' => '-37.8475136', 'longitude' => '145.1149491'],
            ['name' => 'IMC University of Applied Sciences', 'latitude' => '48.408592224121094', 'longitude' => '15.58808708190918'],
            ['name' => 'HEC Liège', 'latitude' => '50.6370803', 'longitude' => '5.5623209'],
            ['name' => 'Fundaçao Getulio Vargas', 'latitude' => '-23.5599049', 'longitude' => '-46.6534588'],
            ['name' => 'Nipissing University, North Bay, Ontario', 'latitude' => '46.3432694', 'longitude' => '-79.4916705'],
        ];

        $faker = Faker\Factory::create('en_US');
        $i = 1;
        foreach ($allUniversityData as $universityData) {
            $university = new University();
            $university->setName($universityData['name']);
            $university->setLatitude($universityData['latitude']);
            $university->setLongitude($universityData['longitude']);
            $university->setImage($faker->imageUrl($width = 640, $height = 480));
            $university->setDescription($faker->address);
            $university->setCountry($this->getReference('country_' . $i++));

            $manager->persist($university);
        }
        $manager->flush();
    }
}
