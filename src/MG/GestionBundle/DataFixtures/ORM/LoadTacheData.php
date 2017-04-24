<?php

namespace MG\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use MG\GestionBundle\Entity\tache;

class LoadTacheData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        $tache1 = new tache();
        $tache1->setDesignation("Elaboration du design");
        $tache1->setQuantite(2);
        $tache1->setUnite("heure");

        $this->addReference('tache1', $tache1);

        $manager->persist($tache1);
        
        
        
        $tache2 = new tache();
        $tache2->setDesignation("Developpement Back");
        $tache2->setQuantite(4);
        $tache2->setUnite("heure");

        $this->addReference('tache2', $tache2);

        $manager->persist($tache2);
        
        
        $tache3 = new tache();
        $tache3->setDesignation("Developpement Front");
        $tache3->setQuantite(3);
        $tache3->setUnite("heure");

        $this->addReference('tache3', $tache3);

        $manager->persist($tache3);
        
        
        
        $tache4 = new tache();
        $tache4->setDesignation("Creation des maquettes");
        $tache4->setQuantite(6);
        $tache4->setUnite("heure");

        $this->addReference('tache4', $tache4);

        $manager->persist($tache4);
        
        

        $manager->flush();
    }

    public function getOrder() {
        return 4;
    }

}
