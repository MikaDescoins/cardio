<?php

namespace HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="HomeBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=255, unique=true)
     */
    private $pseudo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateRegister", type="datetime", nullable=true)
     */
    private $dateRegister;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLastLogin", type="datetime", nullable=true)
     */
    private $dateLastLogin;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     *
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set dateRegister
     *
     * @param \DateTime $dateRegister
     *
     * @return User
     */
    public function setDateRegister($dateRegister)
    {
        $this->dateRegister = $dateRegister;

        return $this;
    }

    /**
     * Get dateRegister
     *
     * @return \DateTime
     */
    public function getDateRegister()
    {
        return $this->dateRegister;
    }

    /**
     * Set dateLastLogin
     *
     * @param \DateTime $dateLastLogin
     *
     * @return User
     */
    public function setDateLastLogin($dateLastLogin)
    {
        $this->dateLastLogin = $dateLastLogin;

        return $this;
    }

    /**
     * Get dateLastLogin
     *
     * @return \DateTime
     */
    public function getDateLastLogin()
    {
        return $this->dateLastLogin;
    }
}

