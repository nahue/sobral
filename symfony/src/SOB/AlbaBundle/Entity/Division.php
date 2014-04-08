<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Division
 *
 * @ORM\Table(name="division")
 * @ORM\Entity
 */
class Division
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
     * @var \Anio
     *
     * @ORM\ManyToOne(targetEntity="Anio", inversedBy="fkDivisiones")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_anio_id", referencedColumnName="id")
     * })
     */
    private $fkAnio;

    /**
     * @var \Turno
     *
     * @ORM\ManyToOne(targetEntity="Turno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_turno_id", referencedColumnName="id")
     * })
     */
    private $fkTurno;

    /**
     * @var \Orientacion
     *
     * @ORM\ManyToOne(targetEntity="Orientacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_orientacion_id", referencedColumnName="id")
     * })
     */
    private $fkOrientacion;

    /**
     * @ORM\ManyToMany(targetEntity="Alumno")
     * @ORM\JoinTable(name="rel_alumno_division",
     *      joinColumns={@ORM\JoinColumn(name="fk_division_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_alumno_id", referencedColumnName="id")}
     *      )
     */
    private $fkAlumnos;

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
     * @return Division
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
     * @return Division
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
     * Set fkAnio
     *
     * @param \SOB\AlbaBundle\Entity\Anio $fkAnio
     * @return Division
     */
    public function setFkAnio(\SOB\AlbaBundle\Entity\Anio $fkAnio = null)
    {
        $this->fkAnio = $fkAnio;
    
        return $this;
    }

    /**
     * Get fkAnio
     *
     * @return \SOB\AlbaBundle\Entity\Anio 
     */
    public function getFkAnio()
    {
        return $this->fkAnio;
    }

    /**
     * Set fkTurno
     *
     * @param \SOB\AlbaBundle\Entity\Turno $fkTurno
     * @return Division
     */
    public function setFkTurno(\SOB\AlbaBundle\Entity\Turno $fkTurno = null)
    {
        $this->fkTurno = $fkTurno;
    
        return $this;
    }

    /**
     * Get fkTurno
     *
     * @return \SOB\AlbaBundle\Entity\Turno 
     */
    public function getFkTurno()
    {
        return $this->fkTurno;
    }

    /**
     * Set fkOrientacion
     *
     * @param \SOB\AlbaBundle\Entity\Orientacion $fkOrientacion
     * @return Division
     */
    public function setFkOrientacion(\SOB\AlbaBundle\Entity\Orientacion $fkOrientacion = null)
    {
        $this->fkOrientacion = $fkOrientacion;
    
        return $this;
    }

    /**
     * Get fkOrientacion
     *
     * @return \SOB\AlbaBundle\Entity\Orientacion 
     */
    public function getFkOrientacion()
    {
        return $this->fkOrientacion;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkAlumnos = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fkAlumnos
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumnos
     * @return Division
     */
    public function addFkAlumno(\SOB\AlbaBundle\Entity\Alumno $fkAlumnos)
    {
        $this->fkAlumnos[] = $fkAlumnos;
    
        return $this;
    }

    /**
     * Remove fkAlumnos
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumnos
     */
    public function removeFkAlumno(\SOB\AlbaBundle\Entity\Alumno $fkAlumnos)
    {
        $this->fkAlumnos->removeElement($fkAlumnos);
    }

    /**
     * Get fkAlumnos
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkAlumnos()
    {
        return $this->fkAlumnos;
    }
}