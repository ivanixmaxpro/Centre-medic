<?php

namespace FrontBundle\Entity;

/**
 * Pacient
 */
class Pacient
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
    private $dolencia;

    /**
     * @var string
     */
    private $dni;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Pacient
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
     * @return Pacient
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
     * Set dolencia
     *
     * @param string $dolencia
     *
     * @return Pacient
     */
    public function setDolencia($dolencia)
    {
        $this->dolencia = $dolencia;

        return $this;
    }

    /**
     * Get dolencia
     *
     * @return string
     */
    public function getDolencia()
    {
        return $this->dolencia;
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

