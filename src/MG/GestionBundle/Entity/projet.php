<?php

namespace MG\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="MG\GestionBundle\Repository\projetRepository")
 */
class projet
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var bool
     *
     * @ORM\Column(name="avancement", type="smallint")
     */
    private $avancement;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * Many Projet have One Client.
     * @ORM\ManyToOne(targetEntity="MG\GestionBundle\Entity\Clients", inversedBy="projets")
     * @ORM\JoinColumn(name="clients_id", referencedColumnName="id")
     */
    private $clients;

    /**
   * @ORM\ManyToOne(targetEntity="MG\GestionBundle\Entity\clients", cascade={"persist"})
   */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return projet
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set avancement
     *
     * @param boolean $avancement
     *
     * @return projet
     */
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;

        return $this;
    }

    /**
     * Get avancement
     *
     * @return bool
     */
    public function getAvancement()
    {
        return $this->avancement;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return projet
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return projet
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    public function setClients($clients){
      $this->clients = $clients;
    }

    public function getClients(){
      return $this->clients;
    }

    public function setUser($user){
      $this->user = $user;
    }

    public function getUser(){
      return $this->user;
    }
}
