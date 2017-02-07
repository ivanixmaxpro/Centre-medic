<?php

namespace FrontBundle\Entity;

/**
 * Pacient
 */
class Pacient
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $dolencia;


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
}

