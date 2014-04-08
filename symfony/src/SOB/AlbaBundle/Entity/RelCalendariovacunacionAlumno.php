<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelCalendariovacunacionAlumno
 *
 * @ORM\Table(name="rel_calendariovacunacion_alumno")
 * @ORM\Entity
 */
class RelCalendariovacunacionAlumno
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
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comprobante", type="boolean", nullable=false)
     */
    private $comprobante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

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
     * @var \Calendariovacunacion
     *
     * @ORM\ManyToOne(targetEntity="Calendariovacunacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_calendariovacunacion_id", referencedColumnName="id")
     * })
     */
    private $fkCalendariovacunacion;



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
     * @return RelCalendariovacunacionAlumno
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
     * Set comprobante
     *
     * @param boolean $comprobante
     * @return RelCalendariovacunacionAlumno
     */
    public function setComprobante($comprobante)
    {
        $this->comprobante = $comprobante;
    
        return $this;
    }

    /**
     * Get comprobante
     *
     * @return boolean 
     */
    public function getComprobante()
    {
        return $this->comprobante;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RelCalendariovacunacionAlumno
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
     * Set fkAlumno
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumno
     * @return RelCalendariovacunacionAlumno
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
     * Set fkCalendariovacunacion
     *
     * @param \SOB\AlbaBundle\Entity\Calendariovacunacion $fkCalendariovacunacion
     * @return RelCalendariovacunacionAlumno
     */
    public function setFkCalendariovacunacion(\SOB\AlbaBundle\Entity\Calendariovacunacion $fkCalendariovacunacion = null)
    {
        $this->fkCalendariovacunacion = $fkCalendariovacunacion;
    
        return $this;
    }

    /**
     * Get fkCalendariovacunacion
     *
     * @return \SOB\AlbaBundle\Entity\Calendariovacunacion 
     */
    public function getFkCalendariovacunacion()
    {
        return $this->fkCalendariovacunacion;
    }
}