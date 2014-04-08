<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locacion
 *
 * @ORM\Table(name="locacion")
 * @ORM\Entity
 */
class Locacion
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
     * @ORM\Column(name="direccion", type="string", length=128, nullable=false)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=128, nullable=false)
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
     * @ORM\Column(name="fax", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado", type="string", length=128, nullable=true)
     */
    private $encargado;

    /**
     * @var string
     *
     * @ORM\Column(name="encargado_telefono", type="string", length=20, nullable=true)
     */
    private $encargadoTelefono;

    /**
     * @var boolean
     *
     * @ORM\Column(name="principal", type="boolean", nullable=false)
     */
    private $principal;

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
     * @var \Tipolocacion
     *
     * @ORM\ManyToOne(targetEntity="Tipolocacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_tipolocacion_id", referencedColumnName="id")
     * })
     */
    private $fkTipolocacion;



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
     * @return Locacion
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
     * @return Locacion
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
     * Set direccion
     *
     * @param string $direccion
     * @return Locacion
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
     * @return Locacion
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
     * @return Locacion
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
     * @return Locacion
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
     * Set fax
     *
     * @param string $fax
     * @return Locacion
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set encargado
     *
     * @param string $encargado
     * @return Locacion
     */
    public function setEncargado($encargado)
    {
        $this->encargado = $encargado;
    
        return $this;
    }

    /**
     * Get encargado
     *
     * @return string 
     */
    public function getEncargado()
    {
        return $this->encargado;
    }

    /**
     * Set encargadoTelefono
     *
     * @param string $encargadoTelefono
     * @return Locacion
     */
    public function setEncargadoTelefono($encargadoTelefono)
    {
        $this->encargadoTelefono = $encargadoTelefono;
    
        return $this;
    }

    /**
     * Get encargadoTelefono
     *
     * @return string 
     */
    public function getEncargadoTelefono()
    {
        return $this->encargadoTelefono;
    }

    /**
     * Set principal
     *
     * @param boolean $principal
     * @return Locacion
     */
    public function setPrincipal($principal)
    {
        $this->principal = $principal;
    
        return $this;
    }

    /**
     * Get principal
     *
     * @return boolean 
     */
    public function getPrincipal()
    {
        return $this->principal;
    }

    /**
     * Set fkProvincia
     *
     * @param \SOB\AlbaBundle\Entity\Provincia $fkProvincia
     * @return Locacion
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

    /**
     * Set fkTipolocacion
     *
     * @param \SOB\AlbaBundle\Entity\Tipolocacion $fkTipolocacion
     * @return Locacion
     */
    public function setFkTipolocacion(\SOB\AlbaBundle\Entity\Tipolocacion $fkTipolocacion = null)
    {
        $this->fkTipolocacion = $fkTipolocacion;
    
        return $this;
    }

    /**
     * Get fkTipolocacion
     *
     * @return \SOB\AlbaBundle\Entity\Tipolocacion 
     */
    public function getFkTipolocacion()
    {
        return $this->fkTipolocacion;
    }
}