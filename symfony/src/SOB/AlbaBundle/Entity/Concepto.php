<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concepto
 *
 * @ORM\Table(name="concepto")
 * @ORM\Entity
 */
class Concepto
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var \Establecimiento
     *
     * @ORM\ManyToOne(targetEntity="Establecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_establecimiento_id", referencedColumnName="id")
     * })
     */
    private $fkEstablecimiento;



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
     * @return Concepto
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Concepto
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
     * Set fkEstablecimiento
     *
     * @param \SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento
     * @return Concepto
     */
    public function setFkEstablecimiento(\SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento = null)
    {
        $this->fkEstablecimiento = $fkEstablecimiento;
    
        return $this;
    }

    /**
     * Get fkEstablecimiento
     *
     * @return \SOB\AlbaBundle\Entity\Establecimiento 
     */
    public function getFkEstablecimiento()
    {
        return $this->fkEstablecimiento;
    }
}