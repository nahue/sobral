<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preferencia
 *
 * @ORM\Table(name="preferencia")
 * @ORM\Entity
 */
class Preferencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_por_defecto", type="string", length=128, nullable=true)
     */
    private $valorPorDefecto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;



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
     * @return Preferencia
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
     * Set valorPorDefecto
     *
     * @param string $valorPorDefecto
     * @return Preferencia
     */
    public function setValorPorDefecto($valorPorDefecto)
    {
        $this->valorPorDefecto = $valorPorDefecto;
    
        return $this;
    }

    /**
     * Get valorPorDefecto
     *
     * @return string 
     */
    public function getValorPorDefecto()
    {
        return $this->valorPorDefecto;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Preferencia
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }
}