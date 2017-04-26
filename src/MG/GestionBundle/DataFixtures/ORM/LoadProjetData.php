<?php

namespace MG\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadProjetData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $projet1 = new \MG\GestionBundle\Entity\projet();
        $projet1->setNom("Refonte graphique");
        $projet1->setClients($this->getReference("client1"));
        $projet1->setCategorie($this->getReference("categorie1"));
        $projet1->setAvancement("1");
        $projet1->setCreated(new \DateTime("2017-01-12"));
        $projet1->setUpdated(new \DateTime("2017-01-22"));

        $this->addReference('projet1', $projet1);

        $manager->persist($projet1);


        $projet2 = new \MG\GestionBundle\Entity\projet();
        $projet2->setNom("Dev application");
        $projet2->setClients($this->getReference("client2"));
        $projet1->setCategorie($this->getReference("categorie2"));
        $projet2->setAvancement("2");
        $projet2->setCreated(new \DateTime("2016-11-14"));
        $projet2->setUpdated(new \DateTime("2017-03-05"));

        $this->addReference('projet2', $projet2);

        $manager->persist($projet2);


        $projet3 = new \MG\GestionBundle\Entity\projet();
        $projet3->setNom("Nouveau site e-commerce");
        $projet3->setClients($this->getReference("client3"));
        $projet1->setCategorie($this->getReference("categorie2"));
        $projet3->setAvancement("0");
        $projet3->setCreated(new \DateTime("2017-04-01"));
        $projet3->setUpdated(new \DateTime("2017-04-01"));

        $this->addReference('projet3', $projet3);

        $manager->persist($projet3);



        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}
