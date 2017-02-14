<?php

namespace FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Visita
 *
 * @ORM\Table(name="visita")
 * @ORM\Entity
 */
class Visita
{
    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=255, nullable=false)
     */
    private $data;

    /**
     * @var integer
     *
     * @ORM\Column(name="tractamant_fk", type="integer", nullable=false)
     */
    private $tractamantFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="metge_fk", type="integer", nullable=false)
     */
    private $metgeFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="pacient_fk", type="integer", nullable=false)
     */
    private $pacientFk;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
