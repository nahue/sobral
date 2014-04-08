<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity
 */
class Provincia
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
     * @ORM\Column(name="nombre_corto", type="string", length=32, nullable=false)
     */
    private $nombreCorto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_largo", type="string", length=128, nullable=false)
     */
    private $nombreLargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="orden", type="integer", nullable=true)
     */
    private $orden;

    /**
     * @var \Pais
     *
     * @ORM\ManyToOne(targetEntity="Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_pais_id", referencedColumnName="id")
     * })
     */
    private $fkPais;



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
     * Set nombreCorto
     *
     * @param string $nombreCorto
     * @return Provincia
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
     * Set nombreLargo
     *
     * @param string $nombreLargo
     * @return Provincia
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
     * Set orden
     *
     * @param integer $orden
     * @return Provincia
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
     * Set fkPais
     *
     * @param \SOB\AlbaBundle\Entity\Pais $fkPais
     * @return Provincia
     */
    public function setFkPais(\SOB\AlbaBundle\Entity\Pais $fkPais = null)
    {
        $this->fkPais = $fkPais;
    
        return $this;
    }

    /**
     * Get fkPais
     *
     * @return \SOB\AlbaBundle\Entity\Pais 
     */
    public function getFkPais()
    {
        return $this->fkPais;
    }
}