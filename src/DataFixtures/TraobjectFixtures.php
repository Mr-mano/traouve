<?php

namespace App\DataFixtures;

use App\Entity\Traobject;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TraobjectFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $peluche = new Traobject();
        $peluche->setTitle("peluche");
        $peluche->setPicture("abcd.jpeg");
        $peluche->setDescription("ours blanc");
        $peluche->setEventAt(new \DateTime("2018-10-22"));
        $peluche->setDateEnd(null);
        $peluche->setCity("Rennes");
        $peluche->setAddress("12 rue du Pilon");
        $peluche->setCategory($this->getReference("category-doudou"));
        $peluche->setState($this->getReference("state-perdu"));
        $peluche->setUser($this->getReference('user-1'));
        $peluche->setCounty($this->getReference('county-1'));
        $manager->persist($peluche);
        $this->setReference('category-peluche', $peluche);

        $clef = new Traobject();
        $clef->setTitle("clefs de voiture");
        $clef->setPicture("abcd.jpeg");
        $clef->setDescription("clef Audi");
        $clef->setEventAt(new \DateTime("2018-10-22"));
        $clef->setDateEnd(null);
        $clef->setCity("Brest");
        $clef->setAddress("5 rout du port");
        $clef->setCategory($this->getReference("category-clef"));
        $clef->setState($this->getReference("state-perdu"));
        $clef->setUser($this->getReference('user-4'));
        $clef->setCounty($this->getReference('county-3'));
        $manager->persist($clef);
        $this->setReference('category-clef', $clef);

        $ourson = new Traobject();
        $ourson->setTitle("doudou ourson");
        $ourson->setPicture("abcd.jpeg");
        $ourson->setDescription("ourson bleu ciel");
        $ourson->setEventAt(new \DateTime("2018-10-22"));
        $ourson->setDateEnd(new \DateTime("2018-10-30"));
        $ourson->setCity("Morlaix");
        $ourson->setAddress("place du Capitaine");
        $ourson->setCategory($this->getReference("category-doudou"));
        $ourson->setState($this->getReference("state-trouve"));
        $ourson->setUser($this->getReference('user-3'));
        $ourson->setCounty($this->getReference('county-3'));
        $manager->persist($ourson);
        $this->setReference('category-ourson', $ourson);

        $portefeuille = new Traobject();
        $portefeuille->setTitle("porte feuille");
        $portefeuille->setPicture("abcd.jpeg");
        $portefeuille->setDescription("porte feuille en cuir marron");
        $portefeuille->setEventAt(new \DateTime("2018-11-13"));
        $portefeuille->setDateEnd(new \DateTime("2018-11-25"));
        $portefeuille->setCity("Vannes");
        $portefeuille->setAddress("Rue st vincent");
        $portefeuille->setCategory($this->getReference("category-portefeuille"));
        $portefeuille->setState($this->getReference("state-trouve"));
        $portefeuille->setUser($this->getReference('user-2'));
        $portefeuille->setCounty($this->getReference('county-2'));
        $manager->persist($portefeuille);
        $this->setReference('category-portefeuille', $portefeuille);




        $manager->flush();
    }


    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return [CategoryFixtures::class, StateFixtures::class, UserFixtures::class, CountyFixtures::class,];
    }
}
