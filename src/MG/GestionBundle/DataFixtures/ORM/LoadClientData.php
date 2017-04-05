<?php

namespace MG\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadClientData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Création d'un nouvel utilisateur
        $client1 = new \MG\GestionBundle\Entity\clients();
        $client1->setNom("Jehan");
        $client1->setPrenom("Pierre");
        $client1->setMail("pierre.jehan@gmail.com");
        $client1->setAdresse("08 rue de la Libération");
        $client1->setVille("Rennes");
        $client1->setCodePostal("35000");
        $client1->setTel("0254789564");
        
        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($client1);
        
        // Conserve une référence à l'utilisateur
        $this->addReference('client1', $client1);
        
        
        
                // Création d'un nouvel utilisateur
        $client2 = new \MG\GestionBundle\Entity\clients();
        $client2->setNom("Doe");
        $client2->setPrenom("John");
        $client2->setMail("john.doe@gmail.com");
        $client2->setAdresse("05 avenue de la Marche");
        $client2->setVille("Saint-Malo");
        $client2->setCodePostal("35400");
        $client2->setTel("0287964853");
        
        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($client2);
        
        // Conserve une référence à l'utilisateur
        $this->addReference('client2', $client2);
        
        
        
                // Création d'un nouvel utilisateur
        $client3 = new \MG\GestionBundle\Entity\clients();
        $client3->setNom("Peyrouny");
        $client3->setPrenom("Kevin");
        $client3->setMail("kevin.peyrouny@gmail.com");
        $client3->setAdresse("10 rue Diderot");
        $client3->setVille("Paris");
        $client3->setCodePostal("75001");
        $client3->setTel("0244631245");
        
        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($client3);
        
        // Conserve une référence à l'utilisateur
        $this->addReference('client3', $client3);
        
        
        
        // Executer les requêtes SQL
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}