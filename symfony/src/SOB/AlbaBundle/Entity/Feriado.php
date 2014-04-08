<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feriado
 *
 * @ORM\Table(name="feriado")
 * @ORM\Entity
 */
class Feriado
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="repeticion_anual", type="boolean", nullable=true)
     */
    private $repeticionAnual;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inamovible", type="boolean", nullable=true)
     */
    private $inamovible;

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
     * Set nombre
     *
     * @param string $nombre
     * @return Feriado
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Feriado
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
     * Set repeticionAnual
     *
     * @param boolean $repeticionAnual
     * @return Feriado
     */
    public function setRepeticionAnual($repeticionAnual)
    {
        $this->repeticionAnual = $repeticionAnual;
    
        return $this;
    }

    /**
     * Get repeticionAnual
     *
     * @return boolean 
     */
    public function getRepeticionAnual()
    {
        return $this->repeticionAnual;
    }

    /**
     * Set inamovible
     *
     * @param boolean $inamovible
     * @return Feriado
     */
    public function setInamovible($inamovible)
    {
        $this->inamovible = $inamovible;
    
        return $this;
    }

    /**
     * Get inamovible
     *
     * @return boolean 
     */
    public function getInamovible()
    {
        return $this->inamovible;
    }

    /**
     * Set fkCiclolectivo
     *
     * @param \SOB\AlbaBundle\Entity\Ciclolectivo $fkCiclolectivo
     * @return Feriado
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