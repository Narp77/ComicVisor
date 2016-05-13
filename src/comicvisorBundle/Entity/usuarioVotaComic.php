<?php

namespace comicvisorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * usuarioVotaComic
 */
class usuarioVotaComic
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
     * @var int
     */
    private $voto;


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
     * @return usuarioVotaComic
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
     * @return usuarioVotaComic
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
     * Set voto
     *
     * @param integer $voto
     * @return usuarioVotaComic
     */
    public function setVoto($voto)
    {
        $this->voto = $voto;

        return $this;
    }

    /**
     * Get voto
     *
     * @return integer 
     */
    public function getVoto()
    {
        return $this->voto;
    }
}
