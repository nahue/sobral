<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencia
 *
 * @ORM\Table(name="asistencia")
 * @ORM\Entity
 */
class Asistencia
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
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
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
     * @var \Tipoasistencia
     *
     * @ORM\ManyToOne(targetEntity="Tipoasistencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_tipoasistencia_id", referencedColumnName="id")
     * })
     */
    private $fkTipoasistencia;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Asistencia
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
     * @return Asistencia
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
     * Set fkTipoasistencia
     *
     * @param \SOB\AlbaBundle\Entity\Tipoasistencia $fkTipoasistencia
     * @return Asistencia
     */
    public function setFkTipoasistencia(\SOB\AlbaBundle\Entity\Tipoasistencia $fkTipoasistencia = null)
    {
        $this->fkTipoasistencia = $fkTipoasistencia;
    
        return $this;
    }

    /**
     * Get fkTipoasistencia
     *
     * @return \SOB\AlbaBundle\Entity\Tipoasistencia 
     */
    public function getFkTipoasistencia()
    {
        return $this->fkTipoasistencia;
    }
}