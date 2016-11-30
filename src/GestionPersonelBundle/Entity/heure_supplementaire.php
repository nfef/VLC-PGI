<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * heure_supplementaire
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GestionPersonelBundle\Entity\heure_supplementaireRepository")
 */
class heure_supplementaire
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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreheures", type="integer")
     */
    private $nbreheures;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text")
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
     * Set type
     *
     * @param string $type
     * @return heure_supplementaire
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return heure_supplementaire
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
     * Set nbreheures
     *
     * @param integer $nbreheures
     * @return heure_supplementaire
     */
    public function setNbreheures($nbreheures)
    {
        $this->nbreheures = $nbreheures;

        return $this;
    }

    /**
     * Get nbreheures
     *
     * @return integer 
     */
    public function getNbreheures()
    {
        return $this->nbreheures;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return heure_supplementaire
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
