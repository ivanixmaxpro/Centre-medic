<?php

namespace FrontBundle\Entity;

/**
 * Metge
 */
class Metge
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $especialitat;


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
}

