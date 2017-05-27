<?php

namespace MG\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadFactureData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Création d'un nouvel utilisateur
        $facture1 = new \MG\GestionBundle\Entity\facture();
        $facture1->setNom("Facture Dev Application");
        $facture1->setReference("Facture N°1");
        $facture1->setDateEnvoie(new \DateTime("2017-01-25"));
        $facture1->setCreated(new \DateTime("2017-01-12"));
        $facture1->setUpdated(new \DateTime("2017-01-22"));
        $facture1->setProjet($this->getReference("projet2"));

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($facture1);

        // Conserve une référence à l'utilisateur
        $this->addReference('facture1', $facture1);


        // Création d'un nouvel utilisateur
        $facture2 = new \MG\GestionBundle\Entity\facture();
        $facture2->setNom("Facture refonte graphique ");
        $facture2->setReference("Facture N°2");
        $facture2->setDateEnvoie(new \DateTime("2017-01-25"));
        $facture2->setCreated(new \DateTime("2017-01-12"));
        $facture2->setUpdated(new \DateTime("2017-01-22"));
        $facture2->setProjet($this->getReference("projet1"));

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($facture2);

        // Conserve une référence à l'utilisateur
        $this->addReference('facture2', $facture2);

        // Executer les requêtes SQL
        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
