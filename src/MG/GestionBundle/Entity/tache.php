<?php

namespace MG\GestionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tache
 *
 * @ORM\Table(name="tache")
 * @ORM\Entity(repositoryClass="MG\GestionBundle\Repository\tacheRepository")
 */
class tache
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="decimal", precision=10, scale=0)
     */
    private $quantite;

    /**
     * @var string
     *
     * @ORM\Column(name="unite", type="string", length=45)
     */
    private $unite;

    /**
     * @var decimal
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2)
     */
    private $prix;

    /**
   * @ORM\ManyToOne(targetEntity="MG\GestionBundle\Entity\facture", cascade={"persist"})
   */
    private $facture;

    /**
   * @ORM\ManyToOne(targetEntity="MG\GestionBundle\Entity\devis", cascade={"persist"})
   */
    private $devis;

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
     * Set designation
     *
     * @param string $designation
     *
     * @return tache
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set quantite
     *
     * @param string $quantite
     *
     * @return tache
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set unite
     *
     * @param string $unite
     *
     * @return tache
     */
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get unite
     *
     * @return string
     */
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * @return decimal
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param decimal $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }



    public function setFacture($facture){
      $this->facture = $facture;
    }

    public function getFacture(){
      return $this->facture;
    }

    public function setDevis($devis){
      $this->devis = $devis;
    }

    public function getDevis(){
      return $this->devis;
    }
}
