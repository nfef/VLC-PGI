<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contrat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionPersonelBundle\Entity\contratRepository")
 */
class contrat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="typecontrat", type="string", length=30)
     */
    private $typecontrat;

    /**
     * @var string
     *
     * @ORM\Column(name="dateentree", type="string", length=255)
     */
    private $dateentree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datesortie", type="date")
     */
    private $datesortie;

    /**
     * @var string
     *
     * @ORM\Column(name="typepaie", type="string", length=30)
     */
    private $typepaie;

    /**
     * @var string
     *
     * @ORM\Column(name="qualification", type="string", length=30)
     */
    private $qualification;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=30)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="echelon", type="string", length=30)
     */
    private $echelon;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set typecontrat
     *
     * @param string $typecontrat
     * @return contrat
     */
    public function setTypecontrat($typecontrat)
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    /**
     * Get typecontrat
     *
     * @return string 
     */
    public function getTypecontrat()
    {
        return $this->typecontrat;
    }

    /**
     * Set dateentree
     *
     * @param string $dateentree
     * @return contrat
     */
    public function setDateentree($dateentree)
    {
        $this->dateentree = $dateentree;

        return $this;
    }

    /**
     * Get dateentree
     *
     * @return string 
     */
    public function getDateentree()
    {
        return $this->dateentree;
    }

    /**
     * Set datesortie
     *
     * @param \DateTime $datesortie
     * @return contrat
     */
    public function setDatesortie($datesortie)
    {
        $this->datesortie = $datesortie;

        return $this;
    }

    /**
     * Get datesortie
     *
     * @return \DateTime 
     */
    public function getDatesortie()
    {
        return $this->datesortie;
    }

    /**
     * Set typepaie
     *
     * @param string $typepaie
     * @return contrat
     */
    public function setTypepaie($typepaie)
    {
        $this->typepaie = $typepaie;

        return $this;
    }

    /**
     * Get typepaie
     *
     * @return string 
     */
    public function getTypepaie()
    {
        return $this->typepaie;
    }

    /**
     * Set qualification
     *
     * @param string $qualification
     * @return contrat
     */
    public function setQualification($qualification)
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Get qualification
     *
     * @return string 
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return contrat
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set echelon
     *
     * @param string $echelon
     * @return contrat
     */
    public function setEchelon($echelon)
    {
        $this->echelon = $echelon;

        return $this;
    }

    /**
     * Get echelon
     *
     * @return string 
     */
    public function getEchelon()
    {
        return $this->echelon;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return contrat
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
