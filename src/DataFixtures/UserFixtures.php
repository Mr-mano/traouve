<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{

    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setFirstname("pierre");
        $admin->setLastname("jehan");
        $admin->setEmail("pierre.jehan@gmail.com");
        $admin->setPassword($this->passwordEncoder->encodePassword($admin, "pjehan"));
        $admin->setPhone("0600000000");
        $admin->setPicture("abcd.jpg");
        $admin->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);
        $this->addReference("user-1", $admin);


        $use = new User();
        $use->setFirstname("Raoul");
        $use->setLastname("Ménard");
        $use->setEmail("raoul.menard@orange.fr");
        $use->setPassword($this->passwordEncoder->encodePassword($use, "1234"));
        $use->setPhone("0600000000");
        $use->setPicture("abdc.jpg");
        $use->setRoles(["ROLE_USER"]);
        $manager->persist($use);
        $this->addReference("user-2", $use);


        $use = new User();
        $use->setFirstname("Jean-Claude");
        $use->setLastname("Duce");
        $use->setEmail("jeanclaude@gmail.com");
        $use->setPassword($this->passwordEncoder->encodePassword($use, "1234"));
        $use->setPhone("0600000000");
        $use->setPicture("abdc.jpg");
        $use->setRoles(["ROLE_USER"]);
        $manager->persist($use);
        $this->addReference("user-3", $use);

        $use = new User();
        $use->setFirstname("Gérard");
        $use->setLastname("Fisher");
        $use->setEmail("gerard.fisher@gmail.com");
        $use->setPassword($this->passwordEncoder->encodePassword($use, "1234"));
        $use->setPhone("0600000000");
        $use->setPicture("abdc.jpg");
        $use->setRoles(["ROLE_USER"]);
        $manager->persist($use);
        $this->addReference("user-4", $use);

        $use = new User();
        $use->setFirstname("Ariel");
        $use->setLastname("Leglon");
        $use->setEmail("ariel.leglon@orange.fr");
        $use->setPassword($this->passwordEncoder->encodePassword($use, "1234"));
        $use->setPhone("0600000000");
        $use->setPicture("abdc.jpg");
        $use->setRoles(["ROLE_USER"]);
        $manager->persist($use);
        $this->addReference("user-5", $use);


        $manager->flush();

    }
}
