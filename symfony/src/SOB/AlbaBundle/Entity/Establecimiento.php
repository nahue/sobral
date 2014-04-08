<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Establecimiento
 *
 * @ORM\Table(name="establecimiento")
 * @ORM\Entity
 */
class Establecimiento
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
     * @var string
     *
     * @ORM\Column(name="cuit", type="string", length=20, nullable=true)
     */
    private $cuit;

    /**
     * @var string
     *
     * @ORM\Column(name="legajoprefijo", type="string", length=10, nullable=false)
     */
    private $legajoprefijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="legajosiguiente", type="integer", nullable=true)
     */
    private $legajosiguiente;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=128, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=128, nullable=true)
     */
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo_postal", type="string", length=20, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="rector", type="string", length=255, nullable=true)
     */
    private $rector;

    /**
     * @var \Distritoescolar
     *
     * @ORM\ManyToOne(targetEntity="Distritoescolar")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_distritoescolar_id", referencedColumnName="id")
     * })
     */
    private $fkDistritoescolar;

    /**
     * @var \Organizacion
     *
     * @ORM\ManyToOne(targetEntity="Organizacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_organizacion_id", referencedColumnName="id")
     * })
     */
    private $fkOrganizacion;

    /**
     * @var \Niveltipo
     *
     * @ORM\ManyToOne(targetEntity="Niveltipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_niveltipo_id", referencedColumnName="id")
     * })
     */
    private $fkNiveltipo;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_provincia_id", referencedColumnName="id")
     * })
     */
    private $fkProvincia;



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
     * @return Establecimiento
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
     * @return Establecimiento
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
     * Set cuit
     *
     * @param string $cuit
     * @return Establecimiento
     */
    public function setCuit($cuit)
    {
        $this->cuit = $cuit;
    
        return $this;
    }

    /**
     * Get cuit
     *
     * @return string 
     */
    public function getCuit()
    {
        return $this->cuit;
    }

    /**
     * Set legajoprefijo
     *
     * @param string $legajoprefijo
     * @return Establecimiento
     */
    public function setLegajoprefijo($legajoprefijo)
    {
        $this->legajoprefijo = $legajoprefijo;
    
        return $this;
    }

    /**
     * Get legajoprefijo
     *
     * @return string 
     */
    public function getLegajoprefijo()
    {
        return $this->legajoprefijo;
    }

    /**
     * Set legajosiguiente
     *
     * @param integer $legajosiguiente
     * @return Establecimiento
     */
    public function setLegajosiguiente($legajosiguiente)
    {
        $this->legajosiguiente = $legajosiguiente;
    
        return $this;
    }

    /**
     * Get legajosiguiente
     *
     * @return integer 
     */
    public function getLegajosiguiente()
    {
        return $this->legajosiguiente;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Establecimiento
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    
        return $this;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Establecimiento
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     * @return Establecimiento
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    
        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string 
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Establecimiento
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set rector
     *
     * @param string $rector
     * @return Establecimiento
     */
    public function setRector($rector)
    {
        $this->rector = $rector;
    
        return $this;
    }

    /**
     * Get rector
     *
     * @return string 
     */
    public function getRector()
    {
        return $this->rector;
    }

    /**
     * Set fkDistritoescolar
     *
     * @param \SOB\AlbaBundle\Entity\Distritoescolar $fkDistritoescolar
     * @return Establecimiento
     */
    public function setFkDistritoescolar(\SOB\AlbaBundle\Entity\Distritoescolar $fkDistritoescolar = null)
    {
        $this->fkDistritoescolar = $fkDistritoescolar;
    
        return $this;
    }

    /**
     * Get fkDistritoescolar
     *
     * @return \SOB\AlbaBundle\Entity\Distritoescolar 
     */
    public function getFkDistritoescolar()
    {
        return $this->fkDistritoescolar;
    }

    /**
     * Set fkOrganizacion
     *
     * @param \SOB\AlbaBundle\Entity\Organizacion $fkOrganizacion
     * @return Establecimiento
     */
    public function setFkOrganizacion(\SOB\AlbaBundle\Entity\Organizacion $fkOrganizacion = null)
    {
        $this->fkOrganizacion = $fkOrganizacion;
    
        return $this;
    }

    /**
     * Get fkOrganizacion
     *
     * @return \SOB\AlbaBundle\Entity\Organizacion 
     */
    public function getFkOrganizacion()
    {
        return $this->fkOrganizacion;
    }

    /**
     * Set fkNiveltipo
     *
     * @param \SOB\AlbaBundle\Entity\Niveltipo $fkNiveltipo
     * @return Establecimiento
     */
    public function setFkNiveltipo(\SOB\AlbaBundle\Entity\Niveltipo $fkNiveltipo = null)
    {
        $this->fkNiveltipo = $fkNiveltipo;
    
        return $this;
    }

    /**
     * Get fkNiveltipo
     *
     * @return \SOB\AlbaBundle\Entity\Niveltipo 
     */
    public function getFkNiveltipo()
    {
        return $this->fkNiveltipo;
    }

    /**
     * Set fkProvincia
     *
     * @param \SOB\AlbaBundle\Entity\Provincia $fkProvincia
     * @return Establecimiento
     */
    public function setFkProvincia(\SOB\AlbaBundle\Entity\Provincia $fkProvincia = null)
    {
        $this->fkProvincia = $fkProvincia;
    
        return $this;
    }

    /**
     * Get fkProvincia
     *
     * @return \SOB\AlbaBundle\Entity\Provincia 
     */
    public function getFkProvincia()
    {
        return $this->fkProvincia;
    }
}