<?php

namespace GestionPersonelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * employe
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class employe
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
     * @ORM\Column(name="matricule", type="string", length=30)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateembauche", type="date")
     */
    private $dateembauche;

    /**
     * @var integer
     *
     * @ORM\Column(name="salairebase", type="integer")
     */
    private $salairebase;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date")
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieunaissance", type="string", length=50)
     */
    private $lieunaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="situationfamiliale", type="string", length=50)
     */
    private $situationfamiliale;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbreenfant", type="integer")
     */
    private $nbreenfant;

    /**
     * @var integer
     *
     * @ORM\Column(name="cni", type="integer")
     */
    private $cni;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=50)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=30)
     */
    private $telephone;

    /**
     * @var integer
     *
     * @ORM\Column(name="plafondavance", type="integer")
     */
    private $plafondavance;


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
     * Set matricule
     *
     * @param string $matricule
     * @return employe
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string 
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return employe
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
     * Set prenom
     *
     * @param string $prenom
     * @return employe
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateembauche
     *
     * @param \DateTime $dateembauche
     * @return employe
     */
    public function setDateembauche($dateembauche)
    {
        $this->dateembauche = $dateembauche;

        return $this;
    }

    /**
     * Get dateembauche
     *
     * @return \DateTime 
     */
    public function getDateembauche()
    {
        return $this->dateembauche;
    }

    /**
     * Set salairebase
     *
     * @param integer $salairebase
     * @return employe
     */
    public function setSalairebase($salairebase)
    {
        $this->salairebase = $salairebase;

        return $this;
    }

    /**
     * Get salairebase
     *
     * @return integer 
     */
    public function getSalairebase()
    {
        return $this->salairebase;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return employe
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set lieunaissance
     *
     * @param string $lieunaissance
     * @return employe
     */
    public function setLieunaissance($lieunaissance)
    {
        $this->lieunaissance = $lieunaissance;

        return $this;
    }

    /**
     * Get lieunaissance
     *
     * @return string 
     */
    public function getLieunaissance()
    {
        return $this->lieunaissance;
    }

    /**
     * Set situationfamiliale
     *
     * @param string $situationfamiliale
     * @return employe
     */
    public function setSituationfamiliale($situationfamiliale)
    {
        $this->situationfamiliale = $situationfamiliale;

        return $this;
    }

    /**
     * Get situationfamiliale
     *
     * @return string 
     */
    public function getSituationfamiliale()
    {
        return $this->situationfamiliale;
    }

    /**
     * Set nbreenfant
     *
     * @param integer $nbreenfant
     * @return employe
     */
    public function setNbreenfant($nbreenfant)
    {
        $this->nbreenfant = $nbreenfant;

        return $this;
    }

    /**
     * Get nbreenfant
     *
     * @return integer 
     */
    public function getNbreenfant()
    {
        return $this->nbreenfant;
    }

    /**
     * Set cni
     *
     * @param integer $cni
     * @return employe
     */
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get cni
     *
     * @return integer 
     */
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return employe
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return employe
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return employe
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return employe
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set plafondavance
     *
     * @param integer $plafondavance
     * @return employe
     */
    public function setPlafondavance($plafondavance)
    {
        $this->plafondavance = $plafondavance;

        return $this;
    }

    /**
     * Get plafondavance
     *
     * @return integer 
     */
    public function getPlafondavance()
    {
        return $this->plafondavance;
    }
}
