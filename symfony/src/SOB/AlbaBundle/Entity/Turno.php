<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turno
 *
 * @ORM\Table(name="turno")
 * @ORM\Entity
 */
class Turno
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
     * @ORM\Column(name="hora_inicio", type="time", nullable=false)
     */
    private $horaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hora_fin", type="time", nullable=false)
     */
    private $horaFin;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

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
     * Set horaInicio
     *
     * @param \DateTime $horaInicio
     * @return Turno
     */
    public function setHoraInicio($horaInicio)
    {
        $this->horaInicio = $horaInicio;
    
        return $this;
    }

    /**
     * Get horaInicio
     *
     * @return \DateTime 
     */
    public function getHoraInicio()
    {
        return $this->horaInicio;
    }

    /**
     * Set horaFin
     *
     * @param \DateTime $horaFin
     * @return Turno
     */
    public function setHoraFin($horaFin)
    {
        $this->horaFin = $horaFin;
    
        return $this;
    }

    /**
     * Get horaFin
     *
     * @return \DateTime 
     */
    public function getHoraFin()
    {
        return $this->horaFin;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Turno
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
     * Set fkCiclolectivo
     *
     * @param \SOB\AlbaBundle\Entity\Ciclolectivo $fkCiclolectivo
     * @return Turno
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