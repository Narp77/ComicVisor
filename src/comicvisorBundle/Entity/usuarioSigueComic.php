<?php

namespace comicvisorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuarioSigueComic
 */
class usuarioSigueComic
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $idusuario;

    /**
     * @var int
     */
    private $idcomic;


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
     * Set idusuario
     *
     * @param integer $idusuario
     * @return usuarioSigueComic
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
     * Set idcomic
     *
     * @param integer $idcomic
     * @return usuarioSigueComic
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
}
