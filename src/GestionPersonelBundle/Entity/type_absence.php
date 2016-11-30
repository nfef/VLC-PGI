<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_absence
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionPersonelBundle\Entity\type_absenceRepository")
 */
class type_absence
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
     * @ORM\Column(name="intitule", type="string", length=255)
     */
    private $intitule;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrejour", type="integer")
     */
    private $nbrejour;


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
     * Set intitule
     *
     * @param string $intitule
     * @return type_absence
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set nbrejour
     *
     * @param integer $nbrejour
     * @return type_absence
     */
    public function setNbrejour($nbrejour)
    {
        $this->nbrejour = $nbrejour;

        return $this;
    }

    /**
     * Get nbrejour
     *
     * @return integer 
     */
    public function getNbrejour()
    {
        return $this->nbrejour;
    }
}
