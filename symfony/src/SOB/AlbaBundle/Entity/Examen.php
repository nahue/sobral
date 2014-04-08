<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity
 */
class Examen
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
     * @ORM\Column(name="nombre", type="string", length=255, nullable=false)
     */
    private $nombre;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Examen
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
     * Set observacion
     *
     * @param string $observacion
     * @return Examen
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
     * @return Examen
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
     * @return Examen
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
     * @return Examen
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
     * @return Examen
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
     * @return Examen
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