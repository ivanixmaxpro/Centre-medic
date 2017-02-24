<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuaris
 *
 * @ORM\Table(name="usuaris")
 * @ORM\Entity
 */
class Usuaris implements UserInterface
{
    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=255, nullable=false)
     */
    private $user;

    /**
     *@Assert\NotBlank()
     *@Assert\Length(max=4096)
     */
    private $plainpassword;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set user
     *
     * @param string $user
     *
     * @return Usuaris
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuaris
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var string
     */
    private $roles;


    /**
     * Set roles
     *
     * @param string $roles
     *
     * @return Usuaris
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return string
     */
    public function getRoles()
    {
        return $this->roles;
    }

    public function getSalt()
    {
        //The bcrypt algorithm doesn't require a separate salt.
        //You *may* need a real salt if you choose a different encoder.
        return null;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN'); 
    }

    public function eraseCredentials()
    {
        return null;
    }
}
