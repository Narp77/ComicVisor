<?php

namespace comicvisorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comicTieneCategoria
 */
class comicTieneCategoria
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
    private $idcategoria;


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
     * @return comicTieneCategoria
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
     * Set idcategoria
     *
     * @param integer $idcategoria
     * @return comicTieneCategoria
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;

        return $this;
    }

    /**
     * Get idcategoria
     *
     * @return integer 
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }
}
