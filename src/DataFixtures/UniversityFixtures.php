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
            ['name' => 'Universidad del Salvador',
            'latitude' => '-34.5993824',
            'longitude' => '-58.3926947',
            'image' => 'https://www.ru.nl/publish/pages/864262/universidad_del_salvador.jpg',
            'description' =>'Universidad del Salvador is a private university in Buenos Aires, belonging to the Jesuit order, which had founded the first Argentine university in Córdoba in 1622. 
            On June 8, 1944, under Juan Perón, the Society of Jesus founded the Higher Institute of Philosophy, based at the College of El Salvador. Adress: Rodríguez Peña 640, C1020 ADN, Buenos Aires, Argentine',
        ],
            ['name' => 'Deakin University',
             'latitude' => '-37.8475136',
             'longitude' => '145.1149491',
             'image' => 'https://scholarship-positions.com/wp-content/uploads/2017/06/Deakin-University-Postgraduate-Research-Scholarship-1024x597.png',
             'description' => "Deakin University is an Australian public university, having hosted nearly 33,600 higher education students in 2007.
             It has campuses in Geelong, Melbourne and Warrnambool in Victoria. It is named after Alfred Deakin, Australia's second prime minister. Adress:Burwood Victoria 3125, Australie",
            ],
            ['name' => 'IMC University of Applied Sciences',
             'latitude' => '48.408592224121094',
             'longitude' => '15.58808708190918',
             'image' => 'https://c1.10times.com/company/1580897268/215665e3a93f448d86.jpeg',
             'description' => "The IMC University of Applied Sciences Krems is an Austrian university offering specializations in health, life sciences, business and digitalization and engineering.
             Address: Am Campus Krems, 3500 Krems an der Donau, Austria",
            ],
            ['name' => 'HEC Liège',
             'latitude' => '50.6370803', 
             'longitude' => '5.5623209',
             'image' => 'https://i.ytimg.com/vi/1OUM4dypwp4/hqdefault.jpg',
             'description' => "HEC Liège - School of Management of the University of Liège, is the Faculty of Economics and Management of the University of Liège. Address: Rue Louvrex 14, 4000 Liège, Belgium  ",
            ],
            ['name' => 'Fundaçao Getulio Vargas',
             'latitude' => '-23.5599049', 
             'longitude' => '-46.6534588',
             'image' => 'https://lh3.googleusercontent.com/proxy/iOjM5n47xRdbcMyyxYX3qW3eVBs1Rgdkjl5_uPkBq_CR69SFMWuGYKV_WjJfABhxiDQQ4XPYIba3MxRMIIfkcyJBlr7Qdw6x-hDUo_Mm1uSW561IVmL--FkXoebUiFopFETUi0PoRUvFe8253Y0C8inPaCgl9g',
             'description' => 'Fundação Getulio Vargas is a Brazilian institution of higher education and a think tank founded on December 20, 1944, with the mission "to stimulate the socio-economic development of Brazil". Adress:Rua da Candelária, 6 - Octávio Gouvêa de Bulhões Building - Downtown, Rio de Janeiro - RJ, 20091-020, Brasil ',
            ],
            ['name' => 'Nipissing University, North Bay, Ontario',
             'latitude' => '46.3432694', 
             'longitude' => '-79.4916705',
             'image' => 'https://www.schoolfinder.com/Graphics/Schools/University/Banner/unipi08.jpg',
             'description' => 'Nipissing University is a Canadian university located in North Bay, Ontario. Adress: 100 College Dr, North Bay, ON P1B 8L7, Canada',
            ],
        ];


        $index = 1;
        foreach ($allUniversityData as $universityData) {
            $university = new University();
            $university->setName($universityData['name']);
            $university->setLatitude($universityData['latitude']);
            $university->setLongitude($universityData['longitude']);
            $university->setImage($universityData['image']);
            $university->setDescription($universityData['description']);
            $university->setCountry($this->getReference('country_' . $index++));

            $manager->persist($university);
        }
        $manager->flush();
    }
}
