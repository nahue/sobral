<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periodo
 *
 * @ORM\Table(name="periodo")
 * @ORM\Entity
 */
class Periodo
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="datetime", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="calcular", type="boolean", nullable=false)
     */
    private $calcular;

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=1000, nullable=true)
     */
    private $formula;

    /**
     * @var \Ciclolectivo
     *
     * @ORM\ManyToOne(targetEntity="Ciclolectivo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_ciclolectivo_id", referencedColumnName="id")
     * })
     */
    private $fkCiclolectivo;



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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Periodo
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;
    
        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return Periodo
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;
    
        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Periodo
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
     * Set calcular
     *
     * @param boolean $calcular
     * @return Periodo
     */
    public function setCalcular($calcular)
    {
        $this->calcular = $calcular;
    
        return $this;
    }

    /**
     * Get calcular
     *
     * @return boolean 
     */
    public function getCalcular()
    {
        return $this->calcular;
    }

    /**
     * Set formula
     *
     * @param string $formula
     * @return Periodo
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;
    
        return $this;
    }

    /**
     * Get formula
     *
     * @return string 
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set fkCiclolectivo
     *
     * @param \SOB\AlbaBundle\Entity\Ciclolectivo $fkCiclolectivo
     * @return Periodo
     */
    public function setFkCiclolectivo(\SOB\AlbaBundle\Entity\Ciclolectivo $fkCiclolectivo = null)
    {
        $this->fkCiclolectivo = $fkCiclolectivo;
    
        return $this;
    }

    /**
     * Get fkCiclolectivo
     *
     * @return \SOB\AlbaBundle\Entity\Ciclolectivo 
     */
    public function getFkCiclolectivo()
    {
        return $this->fkCiclolectivo;
    }
}