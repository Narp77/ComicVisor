<?php

namespace comicvisorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * version
 */
class version
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idcapitulo;

    /**
     * @var int
     */
    private $idusuario;

    /**
     * @var int
     */
    private $numeroPag;


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
     * Set idcapitulo
     *
     * @param integer $idcapitulo
     * @return version
     */
    public function setIdcapitulo($idcapitulo)
    {
        $this->idcapitulo = $idcapitulo;

        return $this;
    }

    /**
     * Get idcapitulo
     *
     * @return integer 
     */
    public function getIdcapitulo()
    {
        return $this->idcapitulo;
    }

    /**
     * Set idusuario
     *
     * @param integer $idusuario
     * @return version
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return integer 
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set numeroPag
     *
     * @param integer $numeroPag
     * @return version
     */
    public function setNumeroPag($numeroPag)
    {
        $this->numeroPag = $numeroPag;

        return $this;
    }

    /**
     * Get numeroPag
     *
     * @return integer 
     */
    public function getNumeroPag()
    {
        return $this->numeroPag;
    }
}
