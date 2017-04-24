<?php

namespace MG\GestionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;


class LoadUserData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    
    private $container;
    
    public function load(ObjectManager $manager)
    {
        // Get our userManager, you must implement `ContainerAwareInterface`
        $userManager = $this->container->get('fos_user.user_manager');

        // Create our user and set details
        /* @var $user \MG\UserBundle\Entity\User */
        $user = $userManager->createUser();
        $user->setUsername('workplace');
        $user->setEmail('workplace@yopmail.com');
        $user->setPlainPassword('workplace');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setPicture("avatar.png");
        
        // Update the user
        $userManager->updateUser($user, true);

        // Conserve une référence à l'utilisateur
        $this->addReference('workplace', $user);

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($user);
        
        
        
        // Create our user and set details
        /* @var $user \MG\UserBundle\Entity\User */
        $user = $userManager->createUser();
        $user->setUsername('Kevin');
        $user->setEmail('kevin.peyrouny@yopmail.com');
        $user->setPlainPassword('kevin35');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setPicture("avatar.png");
        
        // Update the user
        $userManager->updateUser($user, true);

        // Conserve une référence à l'utilisateur
        $this->addReference('Kevin', $user);

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($user);
        
        
        
        
        // Create our user and set details
        /* @var $user \MG\UserBundle\Entity\User */
        $user = $userManager->createUser();
        $user->setUsername('Maxime');
        $user->setEmail('maxime.gruchet@yopmail.com');
        $user->setPlainPassword('maxime35');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setPicture("avatar.png");
        
        // Update the user
        $userManager->updateUser($user, true);

        // Conserve une référence à l'utilisateur
        $this->addReference('Maxime', $user);

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($user);
        
       
        
        
        
        // Create our user and set details
        /* @var $user \MG\UserBundle\Entity\User */
        $user = $userManager->createUser();
        $user->setUsername('Alice');
        $user->setEmail('alice.talaga@yopmail.com');
        $user->setPlainPassword('alice35');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setPicture("avatar.png");
        
        // Update the user
        $userManager->updateUser($user, true);

        // Conserve une référence à l'utilisateur
        $this->addReference('Alice', $user);

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($user);
        
       
        
        
        
        // Create our user and set details
        /* @var $user \MG\UserBundle\Entity\User */
        $user = $userManager->createUser();
        $user->setUsername('Medhi');
        $user->setEmail('medhi.brodin@yopmail.com');
        $user->setPlainPassword('medhi35');
        $user->setEnabled(true);
        $user->setRoles(array('ROLE_ADMIN'));
        $user->setPicture("avatar.png");
        
        // Update the user
        $userManager->updateUser($user, true);

        // Conserve une référence à l'utilisateur
        $this->addReference('Medhi', $user);

        // Ajoute l'utilisateur dans Doctrine
        $manager->persist($user);
        
        

        // Executer les requêtes SQL
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }

    public function setContainer(\Symfony\Component\DependencyInjection\ContainerInterface $container = null) {
        $this->container = $container;
    }

}
