<?php

namespace App\DataFixtures;

use App\Entity\Country;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;


class CountryFixtures extends Fixture 
{
    public function load(ObjectManager $manager)
    {
        $allCountryData =  [
            ['name' => 'Argentina', 'latitude' => '-38.4212955', 'longitude' => '-63.587402499999996', 'image' => 'https://cdn.pixabay.com/photo/2013/01/11/01/22/landscape-74572_960_720.jpg'],
            ['name' => 'Australia' , 'latitude' => '-26.853387500000004', 'longitude' => '133.27515449999999', 'image' => 'https://cdn.pixabay.com/photo/2018/05/07/22/08/sydney-opera-house-3381786_960_720.jpg'],
            ['name' => 'Austria',  'latitude' => '47.6975425', 'longitude' => '13.34931899999998', 'image' => 'https://cdn.pixabay.com/photo/2018/08/16/08/39/hallstatt-3609863_960_720.jpg'],
            ['name' => 'Belgium', 'latitude' => '50.499527', 'longitude' => '4.475402500000001', 'image' => 'https://cdn.pixabay.com/photo/2017/08/08/14/44/belfry-2611573__340.jpg'],
            ['name' => 'Brazil', 'latitude' => '-14.242914500000001', 'longitude' => '-53.1892665', 'image' => 'https://cdn.pixabay.com/photo/2017/01/08/19/30/rio-de-janeiro-1963744_960_720.jpg'],
            ['name' => 'Canada', 'latitude' => ' 62.393303', 'longitude' => '-96.8181455', 'image' => 'https://cdn.pixabay.com/photo/217/5/09/03/47/buildings-2297210_960_720.jpg'],
            ['name' => 'Chile', 'latitude' => '-36.7119505', 'longitude' => '-73.601704', 'image' => 'https://cdn.pixabay.com/photo/2016/06/17/18/45/chile-1463830_960_720.jpg'],
            ['name' => 'China', 'latitude' => '34.668138', 'longitude' => '104.16580199999999', 'image' => 'https://cdn.pixabay.com/photo/2017/12/16/16/37/mountain-3022908_960_720.jpg'],
            ['name' => 'Colombia', 'latitude' => '4.577316499999999', 'longitude' => '-74.29897299999999', 'image' => 'https://cdn.pixabay.com/photo/2020/02/25/11/52/colombia-4878721_960_720.jpg'],
            ['name' => 'Czech Rep', 'latitude' => '49.800900999999996', 'longitude' => '15.478152499999993', 'image' => 'https://cdn.pixabay.com/photo/2020/12/09/21/39/city-5818738_960_720.jpg'],
            ['name' => 'Denmark', 'latitude' => '56.15540300000001', 'longitude' => '11.617222500000025', 'image' => 'https://cdn.pixabay.com/photo/2019/03/14/10/20/copenhagen-4054563_960_720.jpg'],
            ['name' => 'India', 'latitude' => '21.125681', 'longitude' => '82.79499799999996', 'image' => 'https://cdn.pixabay.com/photo/2016/02/19/09/59/taj-mahal-1209004_960_720.jpg'],
            ['name' => 'Ireland', 'latitude' => '53.4197505', 'longitude' => '-8.24047250000001', 'image' => 'https://cdn.pixabay.com/photo/2015/11/11/03/47/evening-1038148_960_720.jpg'],
            ['name' => 'Israël', 'latitude' => '31.418388', 'longitude' => '35.073541377209494', 'image' => 'https://cdn.pixabay.com/photo/2016/10/03/21/13/jerusalem-1712855_960_720.jpg'],
            ['name' => 'Italy', 'latitude' => '41.8739875', 'longitude' => '12.564166999999998', 'image' => 'https://cdn.pixabay.com/photo/2016/10/03/17/55/gondola-1712314_960_720.jpg'],
            ['name' => 'Japan', 'latitude' => '34.886306', 'longitude' => '134.379711', 'image' => 'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014616_960_720.jpg'],
            ['name' => 'Lebanon', 'latitude' => '33.872639', 'longitude' => '35.876735499999995', 'image' => 'https://cdn.pixabay.com/photo/2017/07/26/19/42/lebanon-2542916_960_720.jpg'],
            ['name' => 'Lithuania', 'latitude' => '55.174111999999994', 'longitude' => '23.906735999999995', 'image' => 'https://cdn.pixabay.com/photo/2016/01/08/16/20/vilnius-1128573_960_720.jpg'],
            ['name' => 'Malaysia', 'latitude' => '4.1093195', 'longitude' => '109.45547499999998', 'image' => 'https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_960_720.jpg'],
            ['name' => 'Mexico', 'latitude' => '23.624812500000004', 'longitude' => '-102.57867049999999', 'image' => 'https://cdn.pixabay.com/photo/2017/09/05/22/03/mexico-city-2719368_960_720.jpg'],
            ['name' => 'Morocco', 'latitude' => '31.792305849269', 'longitude' => '-7.080168000000015', 'image' => 'https://cdn.pixabay.com/photo/2017/05/27/22/33/morocco-2349647_960_720.jpg'],
            ['name' => 'Netherlands', 'latitude' => '52.133057', 'longitude' => '5.29525000000001', 'image' => 'https://cdn.pixabay.com/photo/2020/04/13/17/16/netherlands-5039354_960_720.jpg'],
            ['name' => 'Norway', 'latitude' => '64.58301349999999', 'longitude' => '17.86410976037601', 'image' => 'https://cdn.pixabay.com/photo/2019/06/25/10/42/lofoten-4297932_960_720.jpg'],
            ['name' => 'Peru', 'latitude' => '-9.1813525', 'longitude' => '-75.002365', 'image' => 'https://cdn.pixabay.com/photo/2020/10/23/16/43/vicuna-5679264_960_720.jpg'],
            ['name' => 'Poland', 'latitude' => '51.9227505', 'longitude' => '19.136874499999976', 'image' => 'https://cdn.pixabay.com/photo/2019/09/12/18/34/street-4472321_960_720.jpg'],
            ['name' => 'Portugal', 'latitude' => '39.553444', 'longitude' => '-7.839318999999989', 'image' => 'https://cdn.pixabay.com/photo/2018/01/21/17/43/lisbon-3097112_960_720.jpg'],
            ['name' => 'Russia', 'latitude' => '61.5231115', 'longitude' => '105.10000000000002', 'image' => 'https://cdn.pixabay.com/photo/2016/07/30/08/13/moscow-1556561_960_720.jpg'],
            ['name' => 'Singapore', 'latitude' => '1.3649170000000002', 'longitude' => '103.82287200000002', 'image' => 'https://cdn.pixabay.com/photo/2014/08/30/06/49/singapore-431421_960_720.jpg'],
            ['name' => 'Slovenia', 'latitude' => '46.1455285', 'longitude' => '14.974541499999987', 'image' => 'https://cdn.pixabay.com/photo/2017/01/19/23/46/panorama-1993645_960_720.jpg'],
            ['name' => 'South Africa', 'latitude' => '-28.48322', 'longitude' => '24.676997', 'image' => 'https://cdn.pixabay.com/photo/2017/01/15/18/55/south-africa-1982418_960_720.jpg'],
            ['name' => 'South Korea', 'latitude' => '35.9016955', 'longitude' => '127.73588949999998', 'image' => 'https://cdn.pixabay.com/photo/2019/04/20/11/33/korea-4141535_960_720.jpg'],
            ['name' => 'Spain', 'latitude' => '39.896026500000005', 'longitude' => '-2.487694499999975', 'image' => 'https://cdn.pixabay.com/photo/2016/10/18/21/16/plaza-espana-1751442_960_720.jpg'],
            ['name' => 'Sweden', 'latitude' => '62.199805999999995', 'longitude' => '17.63749324195902', 'image' => 'https://cdn.pixabay.com/photo/2015/07/20/18/36/sweden-853150_960_720.jpg'],
            ['name' => 'Switzerland', 'latitude' => '46.8155135', 'longitude' => '8.224471999999992', 'image' => 'https://cdn.pixabay.com/photo/2016/07/14/13/35/matterhorn-1516733_960_720.jpg'],
            ['name' => 'Turkey', 'latitude' => '38.961515500000004', 'longitude' => '35.251750000000015', 'image' => 'https://cdn.pixabay.com/photo/2020/05/21/16/04/turkey-5201498_960_720.jpg'],
            ['name' => 'United Kingdom', 'latitude' => '54.633221000000006', 'longitude' => '-3.432277499999998', 'image' => 'https://cdn.pixabay.com/photo/2018/01/12/11/55/london-3078109_960_720.jpg'],
            ['name' => 'United Arab Emirates', 'latitude' => '24.3587446212765', 'longitude' => '53.98249435424799', 'image' => 'https://cdn.pixabay.com/photo/2016/07/13/14/15/dubai-1514540_960_720.jpg'],
            ['name' => 'Uruguay', 'latitude' => '-32.53152', 'longitude' => '-55.75832750000001', 'image' => 'https://cdn.pixabay.com/photo/2017/10/08/15/17/palacio-salvo-2830233_960_720.jpg'],
            ['name' => 'USA', 'latitude' => '36.966428', 'longitude' => '-95.844032', 'image' => 'https://cdn.pixabay.com/photo/2016/01/19/17/51/suspension-bridge-1149942_960_720.jpg'],
            ['name' => 'Vietnam', 'latitude' => '15.9742225', 'longitude' => '105.80643099999998', 'image' => 'https://cdn.pixabay.com/photo/2017/10/12/03/03/view-2843338_1280.jpg']
        ];
        $i=1;
        foreach ($allCountryData as $countryData ) {
            $country = new Country();
            $country->setName($countryData['name']);
            $country->setLatitude($countryData['latitude']);
            $country->setLongitude($countryData['longitude']);
            $country->setImage($countryData['image']);
            
            $manager->persist($country);
            $this->addReference('country_' . $i++, $country);
        }

        $manager->flush();
    }
}
