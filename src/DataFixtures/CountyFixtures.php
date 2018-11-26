<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 26/11/2018
 * Time: 13:02
 */

namespace App\DataFixtures;


use App\Entity\County;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;


class CountyFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $counties = [
            ["Ile et Vilaine", "35"],
            ["Côte d'Armor", "22"],
            ["Morbihan", "56"],
            ["Finistère", "29"],
        ];

        foreach ($counties as $key => $county) {
            $cou = new County();
            $cou->setLabel($county[0]);
            $cou->setZipCode($county[1]);
            $manager->persist($cou);
            $this->setReference('county-' . ($key + 1), $cou);
        }
        $manager->flush();
    }
}