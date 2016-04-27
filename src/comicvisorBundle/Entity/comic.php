<?php

namespace comicvisorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comic
 */
class comic
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $autor;

    /**
     * @var \DateTime
     */
    private $fechaSalida;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $portada;

    /**
     * @var string
     */
    private $portadaNombre;


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
     * Set nombre
     *
     * @param string $nombre
     * @return comic
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return comic
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     * @return comic
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

    /**
     * Set estado
     *
     * @param string $estado
     * @return comic
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return comic
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set portada
     *
     * @param string $portada
     * @return comic
     */
    public function setPortada($portada)
    {
        $this->portada = $portada;

        return $this;
    }

    /**
     * Get portada
     *
     * @return string 
     */
    public function getPortada()
    {
        return $this->portada;
    }

    /**
     * Set portadaNombre
     *
     * @param string $portadaNombre
     * @return comic
     */
    public function setPortadaNombre($portadaNombre)
    {
        $this->portadaNombre = $portadaNombre;

        return $this;
    }

    /**
     * Get portadaNombre
     *
     * @return string 
     */
    public function getPortadaNombre()
    {
        return $this->portadaNombre;
    }
}
