<?php

namespace FrontBundle\Entity;

/**
 * Metge
 */
class Metge
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $cognom;

    /**
     * @var string
     */
    private $especialitat;

    /**
     * @var string
     */
    private $dni;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Metge
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
     * Set cognom
     *
     * @param string $cognom
     *
     * @return Metge
     */
    public function setCognom($cognom)
    {
        $this->cognom = $cognom;

        return $this;
    }

    /**
     * Get cognom
     *
     * @return string
     */
    public function getCognom()
    {
        return $this->cognom;
    }

    /**
     * Set especialitat
     *
     * @param string $especialitat
     *
     * @return Metge
     */
    public function setEspecialitat($especialitat)
    {
        $this->especialitat = $especialitat;

        return $this;
    }

    /**
     * Get especialitat
     *
     * @return string
     */
    public function getEspecialitat()
    {
        return $this->especialitat;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }
}

