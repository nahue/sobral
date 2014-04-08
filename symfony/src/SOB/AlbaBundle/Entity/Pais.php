<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity
 */
class Pais
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
     * @ORM\Column(name="nombre_largo", type="string", length=128, nullable=false)
     */
    private $nombreLargo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_corto", type="string", length=32, nullable=false)
     */
    private $nombreCorto;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;



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
     * Set nombreLargo
     *
     * @param string $nombreLargo
     * @return Pais
     */
    public function setNombreLargo($nombreLargo)
    {
        $this->nombreLargo = $nombreLargo;
    
        return $this;
    }

    /**
     * Get nombreLargo
     *
     * @return string 
     */
    public function getNombreLargo()
    {
        return $this->nombreLargo;
    }

    /**
     * Set nombreCorto
     *
     * @param string $nombreCorto
     * @return Pais
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;
    
        return $this;
    }

    /**
     * Get nombreCorto
     *
     * @return string 
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }

    /**
     * Set orden
     *
     * @param integer $orden
     * @return Pais
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
}