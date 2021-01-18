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
            ['name'=>'Argentina', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2013/01/11/01/22/landscape-74572_960_720.jpg'],
            ['name'=>'Australia', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2018/05/07/22/08/sydney-opera-house-3381786_960_720.jpg'],
            ['name'=>'Austria', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2018/08/16/08/39/hallstatt-3609863_960_720.jpg'],
            ['name'=>'Belgium', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/08/08/14/44/belfry-2611573__340.jpg'],
            ['name'=>'Brazil', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/01/08/19/30/rio-de-janeiro-1963744_960_720.jpg'],
            ['name'=>'Canada', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/05/09/03/47/buildings-2297210_960_720.jpg'],
            ['name'=>'Chile', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/06/17/18/45/chile-1463830_960_720.jpg'],
            ['name'=>'China', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/12/16/16/37/mountain-3022908_960_720.jpg'],
            ['name'=>'Colombia', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2020/02/25/11/52/colombia-4878721_960_720.jpg'],
            ['name'=>'Czech Rep', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2020/12/09/21/39/city-5818738_960_720.jpg'],
            ['name'=>'Denmark', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2019/03/14/10/20/copenhagen-4054563_960_720.jpg'],
            ['name'=>'Ecuador', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2019/08/26/03/35/cathedral-4430675_960_720.jpg'],
            ['name'=>'Estonia', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2019/09/27/20/37/singer-meadow-4509394_960_720.jpg'],
            ['name'=>'Finland', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/05/01/17/24/lake-scenery-1365288_960_720.jpg'],
            ['name'=>'Germany', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2018/11/29/21/19/hamburg-3846525_960_720.jpg'],
            ['name'=>'Hungary', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2013/05/15/09/05/bridge-111326_960_720.jpg'],
            ['name'=>'India', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/02/19/09/59/taj-mahal-1209004_960_720.jpg'],
            ['name'=>'Ireland', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2015/11/11/03/47/evening-1038148_960_720.jpg'],
            ['name'=>'Israël', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/10/03/21/13/jerusalem-1712855_960_720.jpg'],
            ['name'=>'Italy', 'latitude'=>0, 'longitude'=>0], 'image'=>'https://cdn.pixabay.com/photo/2016/10/03/17/55/gondola-1712314_960_720.jpg',
            ['name'=>'Japan', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/01/28/02/24/japan-2014616_960_720.jpg'],
            ['name'=>'Lebanon', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/07/26/19/42/lebanon-2542916_960_720.jpg'],
            ['name'=>'Lithuania', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/01/08/16/20/vilnius-1128573_960_720.jpg'],
            ['name'=>'Malaysia', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/11/13/12/52/kuala-lumpur-1820944_960_720.jpg'],
            ['name'=>'Mexico', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/09/05/22/03/mexico-city-2719368_960_720.jpg'],
            ['name'=>'Morocco', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/05/27/22/33/morocco-2349647_960_720.jpg'],
            ['name'=>'Netherlands', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2020/04/13/17/16/netherlands-5039354_960_720.jpg'],
            ['name'=>'Norway', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2019/06/25/10/42/lofoten-4297932_960_720.jpg'],
            ['name'=>'Peru', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2020/10/23/16/43/vicuna-5679264_960_720.jpg'],
            ['name'=>'Poland', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2019/09/12/18/34/street-4472321_960_720.jpg'],
            ['name'=>'Portugal', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2018/01/21/17/43/lisbon-3097112_960_720.jpg'],
            ['name'=>'Russia', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/07/30/08/13/moscow-1556561_960_720.jpg'],
            ['name'=>'Singapore', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2014/08/30/06/49/singapore-431421_960_720.jpg'],
            ['name'=>'Slovenia', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/01/19/23/46/panorama-1993645_960_720.jpg'],
            ['name'=>'South Africa', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/01/15/18/55/south-africa-1982418_960_720.jpg'],
            ['name'=>'South Korea', 'latitude'=>0, 'longitude'=>0], 'image'=>'https://cdn.pixabay.com/photo/2019/04/20/11/33/korea-4141535_960_720.jpg',
            ['name'=>'Spain', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/10/18/21/16/plaza-espana-1751442_960_720.jpg'],
            ['name'=>'Sweden', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2015/07/20/18/36/sweden-853150_960_720.jpg'],
            ['name'=>'Switzerland', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/07/14/13/35/matterhorn-1516733_960_720.jpg'],
            ['name'=>'Turkey', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2020/05/21/16/04/turkey-5201498_960_720.jpg'],
            ['name'=>'United Kingdom', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2018/01/12/11/55/london-3078109_960_720.jpg'],
            ['name'=>'United Arab Emirates', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/07/13/14/15/dubai-1514540_960_720.jpg'],
            ['name'=>'Uruguay', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/10/08/15/17/palacio-salvo-2830233_960_720.jpg'],
            ['name'=>'USA', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2016/01/19/17/51/suspension-bridge-1149942_960_720.jpg'],
            ['name'=>'Vietnam', 'latitude'=>0, 'longitude'=>0, 'image'=>'https://cdn.pixabay.com/photo/2017/10/12/03/03/view-2843338_1280.jpg'],
        ];
        foreach($allCountryData as $countryData){
            $country = new Country();
            $country->setName($countryData['name']);
            $country->setLatitude($countryData['latitude']);
            $country->setLongitude($countryData['longitude']);
            $country->setImage($countryData['image']);
            $manager->persist($country);
        }

        $manager->flush();
    }
}
