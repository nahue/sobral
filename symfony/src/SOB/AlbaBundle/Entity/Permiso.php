<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permiso
 *
 * @ORM\Table(name="permiso")
 * @ORM\Entity
 */
class Permiso
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Usuario", mappedBy="fkPermiso")
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
     * @return Permiso
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
     * @return Permiso
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
     * Add fkUsuario
     *
     * @param \SOB\AlbaBundle\Entity\Usuario $fkUsuario
     * @return Permiso
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