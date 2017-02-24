<?php

namespace FrontBundle\Entity;

/**
 * Visita
 */
class Visita
{
    /**
     * @var string
     */
    private $data;

    /**
     * @var integer
     */
    private $tractamantFk;

    /**
     * @var integer
     */
    private $metgeFk;

    /**
     * @var integer
     */
    private $pacientFk;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set data
     *
     * @param string $data
     *
     * @return Visita
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set tractamantFk
     *
     * @param integer $tractamantFk
     *
     * @return Visita
     */
    public function setTractamantFk($tractamantFk)
    {
        $this->tractamantFk = $tractamantFk;

        return $this;
    }

    /**
     * Get tractamantFk
     *
     * @return integer
     */
    public function getTractamantFk()
    {
        return $this->tractamantFk;
    }

    /**
     * Set metgeFk
     *
     * @param integer $metgeFk
     *
     * @return Visita
     */
    public function setMetgeFk($metgeFk)
    {
        $this->metgeFk = $metgeFk;

        return $this;
    }

    /**
     * Get metgeFk
     *
     * @return integer
     */
    public function getMetgeFk()
    {
        return $this->metgeFk;
    }

    /**
     * Set pacientFk
     *
     * @param integer $pacientFk
     *
     * @return Visita
     */
    public function setPacientFk($pacientFk)
    {
        $this->pacientFk = $pacientFk;

        return $this;
    }

    /**
     * Get pacientFk
     *
     * @return integer
     */
    public function getPacientFk()
    {
        return $this->pacientFk;
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

