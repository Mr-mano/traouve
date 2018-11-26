<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $users = [
            ["Raoul", "Ménard", "raoul.menard@orange.fr", "1234", "0600000000", "abdc.jpg"],
            ["Jean-Claude", "Duce", "jeanclaude@gmail.com", "1234", "0600000000", "abdc.jpg"],
            ["Gérard", "Fisher", "gerard.fisher@gmail.com", "1234", "0600000000", "abdc.jpg"],
            ["Ariel", "Leglon", "ariel.leglon@orange.fr", "1234", "0600000000", "abdc.jpg"],
        ];
        foreach ($users as $key => $user) {
            $use = new User();
            $use->setFirstname($user[0]);
            $use->setLastname($user[1]);
            $use->setEmail($user[2]);
            $use->setPassword($user[3]);
            $use->setPhone($user[4]);
            $use->setPicture($user[5]);
            $manager->persist($use);
            $this->setReference('user-' . ($key + 1), $use);
        }

        $manager->flush();

    }
}
