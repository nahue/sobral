<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
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
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="fkRol")
     */
    private $fkUsuario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkUsuario = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     * @return Rol
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
     * @return Rol
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
     * Set activo
     *
     * @param boolean $activo
     * @return Rol
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;
    
        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Add fkUsuario
     *
     * @param \SOB\AlbaBundle\Entity\Usuario $fkUsuario
     * @return Rol
     */
    public function addFkUsuario(\SOB\AlbaBundle\Entity\Usuario $fkUsuario)
    {
        $this->fkUsuario[] = $fkUsuario;
    
        return $this;
    }

    /**
     * Remove fkUsuario
     *
     * @param \SOB\AlbaBundle\Entity\Usuario $fkUsuario
     */
    public function removeFkUsuario(\SOB\AlbaBundle\Entity\Usuario $fkUsuario)
    {
        $this->fkUsuario->removeElement($fkUsuario);
    }

    /**
     * Get fkUsuario
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkUsuario()
    {
        return $this->fkUsuario;
    }
}