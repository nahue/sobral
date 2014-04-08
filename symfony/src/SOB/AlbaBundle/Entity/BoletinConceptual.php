<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoletinConceptual
 *
 * @ORM\Table(name="boletin_conceptual")
 * @ORM\Entity
 */
class BoletinConceptual
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
     * @ORM\Column(name="observacion", type="text", nullable=true)
     */
    private $observacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \Escalanota
     *
     * @ORM\ManyToOne(targetEntity="Escalanota")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_escalanota_id", referencedColumnName="id")
     * })
     */
    private $fkEscalanota;

    /**
     * @var \Alumno
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_alumno_id", referencedColumnName="id")
     * })
     */
    private $fkAlumno;

    /**
     * @var \Concepto
     *
     * @ORM\ManyToOne(targetEntity="Concepto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_concepto_id", referencedColumnName="id")
     * })
     */
    private $fkConcepto;

    /**
     * @var \Periodo
     *
     * @ORM\ManyToOne(targetEntity="Periodo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_periodo_id", referencedColumnName="id")
     * })
     */
    private $fkPeriodo;



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
     * Set observacion
     *
     * @param string $observacion
     * @return BoletinConceptual
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return BoletinConceptual
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fkEscalanota
     *
     * @param \SOB\AlbaBundle\Entity\Escalanota $fkEscalanota
     * @return BoletinConceptual
     */
    public function setFkEscalanota(\SOB\AlbaBundle\Entity\Escalanota $fkEscalanota = null)
    {
        $this->fkEscalanota = $fkEscalanota;
    
        return $this;
    }

    /**
     * Get fkEscalanota
     *
     * @return \SOB\AlbaBundle\Entity\Escalanota 
     */
    public function getFkEscalanota()
    {
        return $this->fkEscalanota;
    }

    /**
     * Set fkAlumno
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumno
     * @return BoletinConceptual
     */
    public function setFkAlumno(\SOB\AlbaBundle\Entity\Alumno $fkAlumno = null)
    {
        $this->fkAlumno = $fkAlumno;
    
        return $this;
    }

    /**
     * Get fkAlumno
     *
     * @return \SOB\AlbaBundle\Entity\Alumno 
     */
    public function getFkAlumno()
    {
        return $this->fkAlumno;
    }

    /**
     * Set fkConcepto
     *
     * @param \SOB\AlbaBundle\Entity\Concepto $fkConcepto
     * @return BoletinConceptual
     */
    public function setFkConcepto(\SOB\AlbaBundle\Entity\Concepto $fkConcepto = null)
    {
        $this->fkConcepto = $fkConcepto;
    
        return $this;
    }

    /**
     * Get fkConcepto
     *
     * @return \SOB\AlbaBundle\Entity\Concepto 
     */
    public function getFkConcepto()
    {
        return $this->fkConcepto;
    }

    /**
     * Set fkPeriodo
     *
     * @param \SOB\AlbaBundle\Entity\Periodo $fkPeriodo
     * @return BoletinConceptual
     */
    public function setFkPeriodo(\SOB\AlbaBundle\Entity\Periodo $fkPeriodo = null)
    {
        $this->fkPeriodo = $fkPeriodo;
    
        return $this;
    }

    /**
     * Get fkPeriodo
     *
     * @return \SOB\AlbaBundle\Entity\Periodo 
     */
    public function getFkPeriodo()
    {
        return $this->fkPeriodo;
    }
}