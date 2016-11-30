<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * avoir_absence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionPersonelBundle\Entity\avoir_absenceRepository")
 */
class avoir_absence
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
     * @ORM\Column(name="datedepart", type="datetime")
     */
    private $datedepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateretour", type="datetime")
     */
    private $dateretour;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;


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
     * Set datedepart
     *
     * @param \DateTime $datedepart
     * @return avoir_absence
     */
    public function setDatedepart($datedepart)
    {
        $this->datedepart = $datedepart;

        return $this;
    }

    /**
     * Get datedepart
     *
     * @return \DateTime 
     */
    public function getDatedepart()
    {
        return $this->datedepart;
    }

    /**
     * Set dateretour
     *
     * @param \DateTime $dateretour
     * @return avoir_absence
     */
    public function setDateretour($dateretour)
    {
        $this->dateretour = $dateretour;

        return $this;
    }

    /**
     * Get dateretour
     *
     * @return \DateTime 
     */
    public function getDateretour()
    {
        return $this->dateretour;
    }

    /**
     * Set motif
     *
     * @param string $motif
     * @return avoir_absence
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getMotif()
    {
        return $this->motif;
    }
}
