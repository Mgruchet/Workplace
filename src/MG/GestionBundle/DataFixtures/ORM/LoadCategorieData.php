<?php

namespace MG\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class LoadCategorieData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $manager) {
        
        $categorie1 = new \MG\GestionBundle\Entity\categories();
        $categorie1->setNom("Web Design");
        $categorie1->setCreated(new \DateTime("2017-02-20"));
        $categorie1->setUpdated(new \DateTime("2017-02-22"));

        $this->addReference('categorie1', $categorie1);

        $manager->persist($categorie1);
        
        
        
        $categorie2 = new \MG\GestionBundle\Entity\categories();
        $categorie2->setNom("Publication graphique");
        $categorie2->setCreated(new \DateTime("2017-03-10"));
        $categorie2->setUpdated(new \DateTime("2017-03-10"));

        $this->addReference('categorie2', $categorie2);

        $manager->persist($categorie2);
        
        
        
        $categorie3 = new \MG\GestionBundle\Entity\categories();
        $categorie3->setNom("Développement");
        $categorie3->setCreated(new \DateTime("2017-04-14"));
        $categorie3->setUpdated(new \DateTime("2017-04-20"));

        $this->addReference('categorie3', $categorie3);

        $manager->persist($categorie3);
        
        
        
        $categorie4 = new \MG\GestionBundle\Entity\categories();
        $categorie4->setNom("PAO");
        $categorie4->setCreated(new \DateTime("2017-04-25"));
        $categorie4->setUpdated(new \DateTime("2017-04-25"));

        $this->addReference('categorie4', $categorie4);

        $manager->persist($categorie4);
        
        

        $manager->flush();
    }

    public function getOrder() {
        return 2;
    }

}
