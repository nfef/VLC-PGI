<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * avance
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionPersonelBundle\Entity\avanceRepository")
 */
class avance
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="avance_mt", type="integer")
     */
    private $avanceMt;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set date
     *
     * @param \DateTime $date
     * @return avance
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set avanceMt
     *
     * @param integer $avanceMt
     * @return avance
     */
    public function setAvanceMt($avanceMt)
    {
        $this->avanceMt = $avanceMt;

        return $this;
    }

    /**
     * Get avanceMt
     *
     * @return integer 
     */
    public function getAvanceMt()
    {
        return $this->avanceMt;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return avance
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return avance
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
}
