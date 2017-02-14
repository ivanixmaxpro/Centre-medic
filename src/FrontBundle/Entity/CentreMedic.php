<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentreMedic
 *
 * @ORM\Table(name="centre_medic", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_EFD89C477EA37CB3", columns={"codi"})})
 * @ORM\Entity
 */
class CentreMedic
{
    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="codi", type="string", length=255, nullable=false)
     */
    private $codi;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return CentreMedic
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
     * Set codi
     *
     * @param string $codi
     *
     * @return CentreMedic
     */
    public function setCodi($codi)
    {
        $this->codi = $codi;

        return $this;
    }

    /**
     * Get codi
     *
     * @return string
     */
    public function getCodi()
    {
        return $this->codi;
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
}
