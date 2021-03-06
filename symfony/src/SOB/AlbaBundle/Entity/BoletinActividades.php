<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BoletinActividades
 *
 * @ORM\Table(name="boletin_actividades")
 * @ORM\Entity
 */
class BoletinActividades
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
     * @var \Actividad
     *
     * @ORM\ManyToOne(targetEntity="Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_actividad_id", referencedColumnName="id")
     * })
     */
    private $fkActividad;

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
     * @return BoletinActividades
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
     * @return BoletinActividades
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
     * @return BoletinActividades
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
     * @return BoletinActividades
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
     * Set fkActividad
     *
     * @param \SOB\AlbaBundle\Entity\Actividad $fkActividad
     * @return BoletinActividades
     */
    public function setFkActividad(\SOB\AlbaBundle\Entity\Actividad $fkActividad = null)
    {
        $this->fkActividad = $fkActividad;
    
        return $this;
    }

    /**
     * Get fkActividad
     *
     * @return \SOB\AlbaBundle\Entity\Actividad 
     */
    public function getFkActividad()
    {
        return $this->fkActividad;
    }

    /**
     * Set fkPeriodo
     *
     * @param \SOB\AlbaBundle\Entity\Periodo $fkPeriodo
     * @return BoletinActividades
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