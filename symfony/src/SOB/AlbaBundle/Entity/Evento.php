<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="evento")
 * @ORM\Entity
 */
class Evento
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
     * @ORM\Column(name="titulo", type="string", length=128, nullable=false)
     */
    private $titulo;

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
     * @var integer
     *
     * @ORM\Column(name="tipo", type="integer", nullable=false)
     */
    private $tipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="frecuencia", type="integer", nullable=false)
     */
    private $frecuencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="frecuencia_intervalo", type="integer", nullable=false)
     */
    private $frecuenciaIntervalo;

    /**
     * @var string
     *
     * @ORM\Column(name="recurrencia_fin", type="string", length=32, nullable=true)
     */
    private $recurrenciaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="recurrencia_dias", type="integer", nullable=false)
     */
    private $recurrenciaDias;

    /**
     * @var integer
     *
     * @ORM\Column(name="estado", type="integer", nullable=false)
     */
    private $estado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Docente", mappedBy="fkEvento")
     */
    private $fkDocente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkDocente = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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
     * Set titulo
     *
     * @param string $titulo
     * @return Evento
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    
        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Evento
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
     * @return Evento
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
     * Set tipo
     *
     * @param integer $tipo
     * @return Evento
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    
        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set frecuencia
     *
     * @param integer $frecuencia
     * @return Evento
     */
    public function setFrecuencia($frecuencia)
    {
        $this->frecuencia = $frecuencia;
    
        return $this;
    }

    /**
     * Get frecuencia
     *
     * @return integer 
     */
    public function getFrecuencia()
    {
        return $this->frecuencia;
    }

    /**
     * Set frecuenciaIntervalo
     *
     * @param integer $frecuenciaIntervalo
     * @return Evento
     */
    public function setFrecuenciaIntervalo($frecuenciaIntervalo)
    {
        $this->frecuenciaIntervalo = $frecuenciaIntervalo;
    
        return $this;
    }

    /**
     * Get frecuenciaIntervalo
     *
     * @return integer 
     */
    public function getFrecuenciaIntervalo()
    {
        return $this->frecuenciaIntervalo;
    }

    /**
     * Set recurrenciaFin
     *
     * @param string $recurrenciaFin
     * @return Evento
     */
    public function setRecurrenciaFin($recurrenciaFin)
    {
        $this->recurrenciaFin = $recurrenciaFin;
    
        return $this;
    }

    /**
     * Get recurrenciaFin
     *
     * @return string 
     */
    public function getRecurrenciaFin()
    {
        return $this->recurrenciaFin;
    }

    /**
     * Set recurrenciaDias
     *
     * @param integer $recurrenciaDias
     * @return Evento
     */
    public function setRecurrenciaDias($recurrenciaDias)
    {
        $this->recurrenciaDias = $recurrenciaDias;
    
        return $this;
    }

    /**
     * Get recurrenciaDias
     *
     * @return integer 
     */
    public function getRecurrenciaDias()
    {
        return $this->recurrenciaDias;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     * @return Evento
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return integer 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add fkDocente
     *
     * @param \SOB\AlbaBundle\Entity\Docente $fkDocente
     * @return Evento
     */
    public function addFkDocente(\SOB\AlbaBundle\Entity\Docente $fkDocente)
    {
        $this->fkDocente[] = $fkDocente;
    
        return $this;
    }

    /**
     * Remove fkDocente
     *
     * @param \SOB\AlbaBundle\Entity\Docente $fkDocente
     */
    public function removeFkDocente(\SOB\AlbaBundle\Entity\Docente $fkDocente)
    {
        $this->fkDocente->removeElement($fkDocente);
    }

    /**
     * Get fkDocente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkDocente()
    {
        return $this->fkDocente;
    }
}