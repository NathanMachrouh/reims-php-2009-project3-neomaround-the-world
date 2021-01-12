<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CountryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $allCountryData=[
            ['name'=>'Argentina', 'latitude'=>0, 'longitude'=>0],
        /*'Australia', 'Austria', 'Belgium', 'Brazil',
        'Canada', 'Chile', 'China', 'Colombia', 'Czech Rep', 'Denmark', 'Ecuador', 'Estonia', 'Finland',
        'Hungary', 'India', 'Ireland', 'Israël', 'Italy', 'Japan', 'Lebanon', 'Lithuania', 'Malaysia',
        'Mexico', 'Morocco', 'Netherlands', 'Norway', 'Peru', 'Poland', 'Portugal', 'Russia', 'Singapore',
        'Slovenia', 'South Africa', 'South Korea', 'Spain', 'Sweden', 'Switzerland', 'Turkey',
        'United Kingdom', 'United Arab Emirates', 'Uruguay', 'USA', 'Vietnam'*/
        ];
        foreach($allCountryData as $countryData){
            $country = new Country();
            $country->setName($countryData['name']);
            $country->setLatitude($countryData['latitude']);
            $country->setLongitude($countryData['longitude']);
            $manager->persist($country);
        }

        $manager->flush();
    }
}
