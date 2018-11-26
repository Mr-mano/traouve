<?php
/**
 * Created by PhpStorm.
 * User: imac
 * Date: 26/11/2018
 * Time: 11:53
 */

namespace App\DataFixtures;


use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;



class CategoryFixtures extends Fixture
{

    public function load(ObjectManager $manager)
    {

        $portefeuille = new Category();
        $portefeuille->setLabel("portefeuille");
        $portefeuille->setIcon("fas fa-wallet");
        $portefeuille->setColor("DarkCyan");
        $manager->persist($portefeuille);
        $this->setReference("category-portefeuille", $portefeuille);

        $clef = new Category();
        $clef->setLabel("clef");
        $clef->setIcon("fas fa-key");
        $clef->setColor("bleu");
        $manager->persist($clef);
        $this->setReference("category-clef", $clef);

        $doudou = new Category();
        $doudou->setLabel("doudou");
        $doudou->setIcon("far fa-child");
        $doudou->setColor("green");
        $manager->persist($doudou);
        $this->setReference("category-doudou", $doudou);

        $animaux = new Category();
        $animaux->setLabel("animaux");
        $animaux->setIcon("fas fa-paw");
        $animaux->setColor("gray");
        $manager->persist($animaux);
        $this->setReference("category-animaux", $animaux);


        $manager->flush();
    }

}
