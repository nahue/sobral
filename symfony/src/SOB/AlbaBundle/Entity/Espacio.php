<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Espacio
 *
 * @ORM\Table(name="espacio")
 * @ORM\Entity
 */
class Espacio
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
     * @var float
     *
     * @ORM\Column(name="m2", type="float", nullable=true)
     */
    private $m2;

    /**
     * @var string
     *
     * @ORM\Column(name="capacidad", type="string", length=255, nullable=true)
     */
    private $capacidad;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255, nullable=true)
     */
    private $estado;

    /**
     * @var \Tipoespacio
     *
     * @ORM\ManyToOne(targetEntity="Tipoespacio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_tipoespacio_id", referencedColumnName="id")
     * })
     */
    private $fkTipoespacio;

    /**
     * @var \Locacion
     *
     * @ORM\ManyToOne(targetEntity="Locacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_locacion_id", referencedColumnName="id")
     * })
     */
    private $fkLocacion;



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
     * @return Espacio
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
     * Set m2
     *
     * @param float $m2
     * @return Espacio
     */
    public function setM2($m2)
    {
        $this->m2 = $m2;
    
        return $this;
    }

    /**
     * Get m2
     *
     * @return float 
     */
    public function getM2()
    {
        return $this->m2;
    }

    /**
     * Set capacidad
     *
     * @param string $capacidad
     * @return Espacio
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    
        return $this;
    }

    /**
     * Get capacidad
     *
     * @return string 
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Espacio
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
     * Set estado
     *
     * @param string $estado
     * @return Espacio
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
     * Set fkTipoespacio
     *
     * @param \SOB\AlbaBundle\Entity\Tipoespacio $fkTipoespacio
     * @return Espacio
     */
    public function setFkTipoespacio(\SOB\AlbaBundle\Entity\Tipoespacio $fkTipoespacio = null)
    {
        $this->fkTipoespacio = $fkTipoespacio;
    
        return $this;
    }

    /**
     * Get fkTipoespacio
     *
     * @return \SOB\AlbaBundle\Entity\Tipoespacio 
     */
    public function getFkTipoespacio()
    {
        return $this->fkTipoespacio;
    }

    /**
     * Set fkLocacion
     *
     * @param \SOB\AlbaBundle\Entity\Locacion $fkLocacion
     * @return Espacio
     */
    public function setFkLocacion(\SOB\AlbaBundle\Entity\Locacion $fkLocacion = null)
    {
        $this->fkLocacion = $fkLocacion;
    
        return $this;
    }

    /**
     * Get fkLocacion
     *
     * @return \SOB\AlbaBundle\Entity\Locacion 
     */
    public function getFkLocacion()
    {
        return $this->fkLocacion;
    }
}