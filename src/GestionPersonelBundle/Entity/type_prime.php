<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * type_prime
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionPersonelBundle\Entity\type_primeRepository")
 */
class type_prime
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

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
     * Set libelle
     *
     * @param string $libelle
     * @return type_prime
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

  
}
