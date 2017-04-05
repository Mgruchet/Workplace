<?php
// src/AppBundle/Entity/User.php

namespace MG\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\Column(name="firstname", type="string", length=255, nullable= true)
     *
     */
    private $firstname;
    
    /**
     * @ORM\Column(name="adresse", type="string", length=255, nullable= true)
     *
     */
    private $adresse;
    
    
     /**
     * @ORM\Column(name="town", type="string", length=255, nullable= true)
     *
     */
    private $town;
    
    
    
     /**
     * @ORM\Column(name="cp", type="integer", nullable= true)
     *
     */
    private $cp;
    
    
     /**
     * @ORM\Column(name="country", type="string", length=255, nullable= true)
     *
     */
    private $country;
    
    
     /**
     * @ORM\Column(name="tel", type="integer", nullable= true)
     *
     */
    private $tel;
    
    
     /**
     * @ORM\Column(name="birthday", type="string", nullable= true)
     *
     */
    private $birthday;
    
    
    
    
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    
    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
 
        return $this;
    }
    
    public function getFirstname(){
        return $this->firstname;
    }
    
    
    
    /**
     * Set adresse
     *
     * @param string $adresse
     * @return User
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;
 
        return $this;
    }
    
    public function getAdresse(){
        return $this->adresse;
    }
    
    
     /**
     * Set town
     *
     * @param string $town
     * @return User
     */
    public function setTown($town) {
        $this->town = $town;
 
        return $this;
    }
    
    public function getTown(){
        return $this->town;
    }
    
    
    
    /**
     * Set cp
     *
     * @param string $cp
     * @return User
     */
    public function setCp($cp) {
        $this->cp = $cp;
 
        return $this;
    }
    
    public function getCp(){
        return $this->cp;
    }
    
    
    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country) {
        $this->country = $country;
 
        return $this;
    }
    
    public function getCountry(){
        return $this->country;
    }
    
    
    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel) {
        $this->tel = $tel;
 
        return $this;
    }
    
    public function getTel(){
        return $this->tel;
    }
    
    
    
    /**
     * Set birthday
     *
     * @param string $birthday
     * @return User
     */
    public function setBirthday($birthday) {
        $this->birthday = $birthday;
 
        return $this;
    }
    
    public function getBirthday(){
        return $this->birthday;
    }

}
