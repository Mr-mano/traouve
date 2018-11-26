<?php

namespace App\DataFixtures;

use App\Entity\State;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class StateFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $trouve = new State();
        $trouve->setLabel("Trouvé");
        $trouve->setColor("green");
        $manager->persist($trouve);

        $perdu = new State();
        $perdu->setLabel("Perdu");
        $perdu->setColor("red");
        $manager->persist($perdu);

        $this->setReference("state-trouve", $trouve);
        $this->setReference("state-perdu", $perdu);

        $manager->flush();
    }
}
