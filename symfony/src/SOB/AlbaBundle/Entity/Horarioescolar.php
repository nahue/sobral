<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horarioescolar
 *
 * @ORM\Table(name="horarioescolar")
 * @ORM\Entity
 */
class Horarioescolar
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
     * @var \Evento
     *
     * @ORM\ManyToOne(targetEntity="Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_evento_id", referencedColumnName="id")
     * })
     */
    private $fkEvento;

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
     * @var \Turno
     *
     * @ORM\ManyToOne(targetEntity="Turno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_turno_id", referencedColumnName="id")
     * })
     */
    private $fkTurno;

    /**
     * @var \Horarioescolartipo
     *
     * @ORM\ManyToOne(targetEntity="Horarioescolartipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_horarioescolartipo_id", referencedColumnName="id")
     * })
     */
    private $fkHorarioescolartipo;



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
     * @return Horarioescolar
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
     * @return Horarioescolar
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
     * Set fkEvento
     *
     * @param \SOB\AlbaBundle\Entity\Evento $fkEvento
     * @return Horarioescolar
     */
    public function setFkEvento(\SOB\AlbaBundle\Entity\Evento $fkEvento = null)
    {
        $this->fkEvento = $fkEvento;
    
        return $this;
    }

    /**
     * Get fkEvento
     *
     * @return \SOB\AlbaBundle\Entity\Evento 
     */
    public function getFkEvento()
    {
        return $this->fkEvento;
    }

    /**
     * Set fkEstablecimiento
     *
     * @param \SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento
     * @return Horarioescolar
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
     * Set fkTurno
     *
     * @param \SOB\AlbaBundle\Entity\Turno $fkTurno
     * @return Horarioescolar
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
     * Set fkHorarioescolartipo
     *
     * @param \SOB\AlbaBundle\Entity\Horarioescolartipo $fkHorarioescolartipo
     * @return Horarioescolar
     */
    public function setFkHorarioescolartipo(\SOB\AlbaBundle\Entity\Horarioescolartipo $fkHorarioescolartipo = null)
    {
        $this->fkHorarioescolartipo = $fkHorarioescolartipo;
    
        return $this;
    }

    /**
     * Get fkHorarioescolartipo
     *
     * @return \SOB\AlbaBundle\Entity\Horarioescolartipo 
     */
    public function getFkHorarioescolartipo()
    {
        return $this->fkHorarioescolartipo;
    }
}