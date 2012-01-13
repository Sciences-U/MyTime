<?php

namespace Backcon\Parametres\CongresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Backcon\Parametres\CongresBundle\Entity\Partners
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Partners
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var text $url
     *
     * @ORM\Column(name="url", type="text")
     * @Assert\NotBlank()
     */
    private $url;

    /**
     * @var string $login
     *
     * @ORM\Column(name="login", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $login;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $password;

    /**
     * @var boolean $debug
     *
     * @ORM\Column(name="debug", type="boolean")
     * @Assert\NotBlank()
     */
    private $debug;

    /**
     * @var boolean $trace
     *
     * @ORM\Column(name="trace", type="boolean")
     * @Assert\NotBlank()
     */
    private $trace;

    /**
     * @var string $proxy_host
     *
     * @ORM\Column(name="proxy_host", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $proxy_host;

    /**
     * @var integer $proxy_port
     *
     * @ORM\Column(name="proxy_port", type="integer")
     * @Assert\NotBlank()
     */
    private $proxy_port;


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
     * Set url
     *
     * @param text $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return text 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set debug
     *
     * @param boolean $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * Get debug
     *
     * @return boolean 
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Set trace
     *
     * @param boolean $trace
     */
    public function setTrace($trace)
    {
        $this->trace = $trace;
    }

    /**
     * Get trace
     *
     * @return boolean 
     */
    public function getTrace()
    {
        return $this->trace;
    }

    /**
     * Set proxy_host
     *
     * @param string $proxyHost
     */
    public function setProxyHost($proxyHost)
    {
        $this->proxy_host = $proxyHost;
    }

    /**
     * Get proxy_host
     *
     * @return string 
     */
    public function getProxyHost()
    {
        return $this->proxy_host;
    }

    /**
     * Set proxy_port
     *
     * @param integer $proxyPort
     */
    public function setProxyPort($proxyPort)
    {
        $this->proxy_port = $proxyPort;
    }

    /**
     * Get proxy_port
     *
     * @return integer 
     */
    public function getProxyPort()
    {
        return $this->proxy_port;
    }
}