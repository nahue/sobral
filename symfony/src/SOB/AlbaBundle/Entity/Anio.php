<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anio
 *
 * @ORM\Table(name="anio")
 * @ORM\Entity
 */
class Anio
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

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
     * @ORM\OneToMany(targetEntity="Division", mappedBy="fkAnio")
     */
    private $fkDivisiones;

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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Anio
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
     * Set orden
     *
     * @param integer $orden
     * @return Anio
     */
    public function setOrden($orden)
    {
        $this->orden = $orden;
    
        return $this;
    }

    /**
     * Get orden
     *
     * @return integer 
     */
    public function getOrden()
    {
        return $this->orden;
    }

    /**
     * Set fkEstablecimiento
     *
     * @param \SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento
     * @return Anio
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

    /**
     * Set fkCarrera
     *
     * @param \SOB\AlbaBundle\Entity\Carrera $fkCarrera
     * @return Anio
     */
    public function setFkCarrera(\SOB\AlbaBundle\Entity\Carrera $fkCarrera = null)
    {
        $this->fkCarrera = $fkCarrera;
    
        return $this;
    }

    /**
     * Get fkCarrera
     *
     * @return \SOB\AlbaBundle\Entity\Carrera 
     */
    public function getFkCarrera()
    {
        return $this->fkCarrera;
    }
  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkDivisiones = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fkDivisiones
     *
     * @param \SOB\AlbaBundle\Entity\Division $fkDivisiones
     * @return Anio
     */
    public function addFkDivisione(\SOB\AlbaBundle\Entity\Division $fkDivisiones)
    {
        $this->fkDivisiones[] = $fkDivisiones;
    
        return $this;
    }

    /**
     * Remove fkDivisiones
     *
     * @param \SOB\AlbaBundle\Entity\Division $fkDivisiones
     */
    public function removeFkDivisione(\SOB\AlbaBundle\Entity\Division $fkDivisiones)
    {
        $this->fkDivisiones->removeElement($fkDivisiones);
    }

    /**
     * Get fkDivisiones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkDivisiones()
    {
        return $this->fkDivisiones;
    }
}