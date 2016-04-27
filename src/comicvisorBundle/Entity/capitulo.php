<?php

namespace comicvisorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * capitulo
 */
class capitulo
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idcomic;

    /**
     * @var int
     */
    private $numero;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var \DateTime
     */
    private $fechaSalida;


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
     * Set idcomic
     *
     * @param integer $idcomic
     * @return capitulo
     */
    public function setIdcomic($idcomic)
    {
        $this->idcomic = $idcomic;

        return $this;
    }

    /**
     * Get idcomic
     *
     * @return integer 
     */
    public function getIdcomic()
    {
        return $this->idcomic;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return capitulo
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return capitulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return capitulo
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }
}
