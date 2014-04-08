<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informe
 *
 * @ORM\Table(name="informe")
 * @ORM\Entity
 */
class Informe
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
     * @var boolean
     *
     * @ORM\Column(name="listado", type="boolean", nullable=false)
     */
    private $listado;

    /**
     * @var string
     *
     * @ORM\Column(name="variables", type="string", length=128, nullable=true)
     */
    private $variables;

    /**
     * @var \Adjunto
     *
     * @ORM\ManyToOne(targetEntity="Adjunto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_adjunto_id", referencedColumnName="id")
     * })
     */
    private $fkAdjunto;

    /**
     * @var \Tipoinforme
     *
     * @ORM\ManyToOne(targetEntity="Tipoinforme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_tipoinforme_id", referencedColumnName="id")
     * })
     */
    private $fkTipoinforme;



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
     * @return Informe
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
     * @return Informe
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
     * Set listado
     *
     * @param boolean $listado
     * @return Informe
     */
    public function setListado($listado)
    {
        $this->listado = $listado;
    
        return $this;
    }

    /**
     * Get listado
     *
     * @return boolean 
     */
    public function getListado()
    {
        return $this->listado;
    }

    /**
     * Set variables
     *
     * @param string $variables
     * @return Informe
     */
    public function setVariables($variables)
    {
        $this->variables = $variables;
    
        return $this;
    }

    /**
     * Get variables
     *
     * @return string 
     */
    public function getVariables()
    {
        return $this->variables;
    }

    /**
     * Set fkAdjunto
     *
     * @param \SOB\AlbaBundle\Entity\Adjunto $fkAdjunto
     * @return Informe
     */
    public function setFkAdjunto(\SOB\AlbaBundle\Entity\Adjunto $fkAdjunto = null)
    {
        $this->fkAdjunto = $fkAdjunto;
    
        return $this;
    }

    /**
     * Get fkAdjunto
     *
     * @return \SOB\AlbaBundle\Entity\Adjunto 
     */
    public function getFkAdjunto()
    {
        return $this->fkAdjunto;
    }

    /**
     * Set fkTipoinforme
     *
     * @param \SOB\AlbaBundle\Entity\Tipoinforme $fkTipoinforme
     * @return Informe
     */
    public function setFkTipoinforme(\SOB\AlbaBundle\Entity\Tipoinforme $fkTipoinforme = null)
    {
        $this->fkTipoinforme = $fkTipoinforme;
    
        return $this;
    }

    /**
     * Get fkTipoinforme
     *
     * @return \SOB\AlbaBundle\Entity\Tipoinforme 
     */
    public function getFkTipoinforme()
    {
        return $this->fkTipoinforme;
    }
}