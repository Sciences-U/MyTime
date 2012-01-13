<?php

namespace Backcon\UtilisateurBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class Utilisateur extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\generatedValue(strategy="AUTO")
    */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Backcon\UtilisateurBundle\Entity\Groupe")
     * @ORM\JoinTable(name="fos_user_user_group",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="group_id", referencedColumnName="id")}
     * )
     */
    protected $groups;

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
     * get expired
     *
     * Implements AdvancedUserInterface
     *
     * @return Boolean true if the user's account is non expired, false otherwise
     */
    public function getTimeExpired()
    {
    	if (null !== $this->expiresAt)
        	return date('d/m/Y',$this->expiresAt->getTimestamp());
        return 'non défini';
    }
    
	/**
     * Checks whether the user's account is going to expired.
     *
     * Implements AdvancedUserInterface
     *
     * @return Boolean true if the user's account is going expired, false otherwise
     */
    public function isAccountGoingExpired()
    {
        if (null !== $this->expiresAt) {
            return true;
        }

        return false;
    }

    /**
     * Checks whether the user is locked.
     *
     * Implements AdvancedUserInterface
     *
     * @return Boolean true if the user is not locked, false otherwise
     */
    public function isAccountNonLocked()
    {
        return !$this->locked;
    }
}