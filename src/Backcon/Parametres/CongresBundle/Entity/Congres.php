<?php

namespace Backcon\Parametres\CongresBundle\Entity;

use Doctrine\ORM\Query\Expr\Math;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Congres
{
    /**
     * @ORM\GeneratedValue
     * @ORM\Id
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string",length="255")
     * @Assert\NotBlank()
     */
    private $nom;
    
    /**
     * @ORM\Column(type="string",length="255")
     * @Assert\NotBlank()
     */
    private $dossier;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     * @Assert\Date()
     */
    private $date_debut;

    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     * @Assert\Date()
     */
    private $date_fin;

    /**
     * @Assert\File(maxSize="6000000")
     * @ORM\Column(type="text", nullable=true)
     */
    private $logo;

    /**
     * @ORM\Column(type="text")
     */
    private $contact_mail;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $url_site;

    /**
     * @ORM\Column(type="string",length="5")
     * @Assert\NotBlank()
     * @Assert\Choice(choices = {"fr"})
     */
    private $langue_defaut;
    
    /**
     * @ORM\OneToOne(targetEntity="Partners")
     * @Assert\NotBlank()
     */
    private $partners;
    

//    public function getAbsolutePath()
//    {
//        return null === $this->logo ? null : $this->getUploadRootDir().'/'.$this->logo;
//    }
//
//    public function getWebPath()
//    {
//        return null === $this->logo ? null : $this->getUploadDir().'/'.$this->logo;
//    }
//
//    protected function getUploadRootDir()
//    {
//        // the absolute directory path where uploaded documents should be saved
//        return __DIR__.'/../../../../../web/'.$this->getUploadDir();
//    }
//
//    protected function getUploadDir()
//    {
//        // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
//        return 'uploads/pictures';
//    }
//    
//	/**
//     * @ORM\PrePersist()
//     * @ORM\PreUpdate()
//     */
//    public function preUpload()
//    {
//        if (null !== $this->file) {
//            // do whatever you want to generate a unique name
//            $this->logo = date('Y-m-d\TH:i:s').'-'.mt_rand(100, 999).'.'.$this->file->guessExtension();
//        }
//    }
//
//    /**
//     * @ORM\PostPersist()
//     * @ORM\PostUpdate()
//     */
//    public function upload()
//    {
//        if (null === $this->file) {
//            return;
//        }
//
//        // if there is an error when moving the file, an exception will
//        // be automatically thrown by move(). This will properly prevent
//        // the entity from being persisted to the database on error
//        $this->file->move($this->getUploadRootDir(), $this->logo);
//
//        unset($this->file);
//    }
//
//    /**
//     * @ORM\PostRemove()
//     */
//    public function removeUpload()
//    {
//        if ($file = $this->getAbsolutePath()) {
//            unlink($file);
//        }
//    }

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
     * Set nom
     *
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
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
     * Set date_debut
     *
     * @param date $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->date_debut = $dateDebut;
    }

    /**
     * Get date_debut
     *
     * @return date 
     */
    public function getDateDebut()
    {
        return $this->date_debut;
    }

    /**
     * Set date_fin
     *
     * @param date $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->date_fin = $dateFin;
    }

    /**
     * Get date_fin
     *
     * @return date 
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * Set logo
     *
     * @param text $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * Get logo
     *
     * @return text 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set contact_mail
     *
     * @param text $contactMail
     */
    public function setContactMail($contactMail)
    {
        $this->contact_mail = $contactMail;
    }

    /**
     * Get contact_mail
     *
     * @return text 
     */
    public function getContactMail()
    {
        return $this->contact_mail;
    }

    /**
     * Set url_site
     *
     * @param text $urlSite
     */
    public function setUrlSite($urlSite)
    {
        $this->url_site = $urlSite;
    }

    /**
     * Get url_site
     *
     * @return text 
     */
    public function getUrlSite()
    {
        return $this->url_site;
    }

    /**
     * Set langue_defaut
     *
     * @param string $langueDefaut
     */
    public function setLangueDefaut($langueDefaut)
    {
        $this->langue_defaut = $langueDefaut;
    }

    /**
     * Get langue_defaut
     *
     * @return string 
     */
    public function getLangueDefaut()
    {
        return $this->langue_defaut;
    }

    /**
     * Set partners
     *
     * @param Backcon\Parametres\CongresBundle\Entity\Partners $partners
     */
    public function setPartners(\Backcon\Parametres\CongresBundle\Entity\Partners $partners)
    {
        $this->partners = $partners;
    }

    /**
     * Get partners
     *
     * @return Backcon\Parametres\CongresBundle\Entity\Partners 
     */
    public function getPartners()
    {
        return $this->partners;
    }

    /**
     * Set dossier
     *
     * @param string $dossier
     */
    public function setDossier($dossier)
    {
        $this->dossier = $dossier;
    }

    /**
     * Get dossier
     *
     * @return string 
     */
    public function getDossier()
    {
        return $this->dossier;
    }
}