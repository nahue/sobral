<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Responsable
 *
 * @ORM\Table(name="responsable")
 * @ORM\Entity
 */
class Responsable
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
     * @ORM\Column(name="apellido", type="string", length=128, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=128, nullable=true)
     */
    private $apellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion", type="string", length=128, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_laboral", type="string", length=128, nullable=true)
     */
    private $direccionLaboral;

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
     * @ORM\Column(name="telefono_laboral", type="string", length=20, nullable=true)
     */
    private $telefonoLaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_movil", type="string", length=20, nullable=true)
     */
    private $telefonoMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_documento", type="string", length=20, nullable=false)
     */
    private $nroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=false)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autorizacion_retiro", type="boolean", nullable=false)
     */
    private $autorizacionRetiro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="llamar_emergencia", type="boolean", nullable=false)
     */
    private $llamarEmergencia;

    /**
     * @var string
     *
     * @ORM\Column(name="ocupacion", type="string", length=255, nullable=true)
     */
    private $ocupacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=true)
     */
    private $fechaNacimiento;

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
     * @var \Tipodocumento
     *
     * @ORM\ManyToOne(targetEntity="Tipodocumento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_tipodocumento_id", referencedColumnName="id")
     * })
     */
    private $fkTipodocumento;

    /**
     * @var \Cuenta
     *
     * @ORM\ManyToOne(targetEntity="Cuenta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_cuenta_id", referencedColumnName="id")
     * })
     */
    private $fkCuenta;

    /**
     * @var \RolResponsable
     *
     * @ORM\ManyToOne(targetEntity="RolResponsable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_rolresponsable_id", referencedColumnName="id")
     * })
     */
    private $fkRolresponsable;

    /**
     * @var \NivelInstruccion
     *
     * @ORM\ManyToOne(targetEntity="NivelInstruccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_nivel_instruccion_id", referencedColumnName="id")
     * })
     */
    private $fkNivelInstruccion;



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
     * @return Responsable
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
     * Set apellido
     *
     * @param string $apellido
     * @return Responsable
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return Responsable
     */
    public function setApellidoMaterno($apellidoMaterno)
    {
        $this->apellidoMaterno = $apellidoMaterno;
    
        return $this;
    }

    /**
     * Get apellidoMaterno
     *
     * @return string 
     */
    public function getApellidoMaterno()
    {
        return $this->apellidoMaterno;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     * @return Responsable
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
     * Set direccionLaboral
     *
     * @param string $direccionLaboral
     * @return Responsable
     */
    public function setDireccionLaboral($direccionLaboral)
    {
        $this->direccionLaboral = $direccionLaboral;
    
        return $this;
    }

    /**
     * Get direccionLaboral
     *
     * @return string 
     */
    public function getDireccionLaboral()
    {
        return $this->direccionLaboral;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Responsable
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
     * @return Responsable
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
     * @return Responsable
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
     * Set telefonoLaboral
     *
     * @param string $telefonoLaboral
     * @return Responsable
     */
    public function setTelefonoLaboral($telefonoLaboral)
    {
        $this->telefonoLaboral = $telefonoLaboral;
    
        return $this;
    }

    /**
     * Get telefonoLaboral
     *
     * @return string 
     */
    public function getTelefonoLaboral()
    {
        return $this->telefonoLaboral;
    }

    /**
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     * @return Responsable
     */
    public function setTelefonoMovil($telefonoMovil)
    {
        $this->telefonoMovil = $telefonoMovil;
    
        return $this;
    }

    /**
     * Get telefonoMovil
     *
     * @return string 
     */
    public function getTelefonoMovil()
    {
        return $this->telefonoMovil;
    }

    /**
     * Set nroDocumento
     *
     * @param string $nroDocumento
     * @return Responsable
     */
    public function setNroDocumento($nroDocumento)
    {
        $this->nroDocumento = $nroDocumento;
    
        return $this;
    }

    /**
     * Get nroDocumento
     *
     * @return string 
     */
    public function getNroDocumento()
    {
        return $this->nroDocumento;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Responsable
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Responsable
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Responsable
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set autorizacionRetiro
     *
     * @param boolean $autorizacionRetiro
     * @return Responsable
     */
    public function setAutorizacionRetiro($autorizacionRetiro)
    {
        $this->autorizacionRetiro = $autorizacionRetiro;
    
        return $this;
    }

    /**
     * Get autorizacionRetiro
     *
     * @return boolean 
     */
    public function getAutorizacionRetiro()
    {
        return $this->autorizacionRetiro;
    }

    /**
     * Set llamarEmergencia
     *
     * @param boolean $llamarEmergencia
     * @return Responsable
     */
    public function setLlamarEmergencia($llamarEmergencia)
    {
        $this->llamarEmergencia = $llamarEmergencia;
    
        return $this;
    }

    /**
     * Get llamarEmergencia
     *
     * @return boolean 
     */
    public function getLlamarEmergencia()
    {
        return $this->llamarEmergencia;
    }

    /**
     * Set ocupacion
     *
     * @param string $ocupacion
     * @return Responsable
     */
    public function setOcupacion($ocupacion)
    {
        $this->ocupacion = $ocupacion;
    
        return $this;
    }

    /**
     * Get ocupacion
     *
     * @return string 
     */
    public function getOcupacion()
    {
        return $this->ocupacion;
    }

    /**
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Responsable
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    
        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return \DateTime 
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set fkProvincia
     *
     * @param \SOB\AlbaBundle\Entity\Provincia $fkProvincia
     * @return Responsable
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
     * Set fkTipodocumento
     *
     * @param \SOB\AlbaBundle\Entity\Tipodocumento $fkTipodocumento
     * @return Responsable
     */
    public function setFkTipodocumento(\SOB\AlbaBundle\Entity\Tipodocumento $fkTipodocumento = null)
    {
        $this->fkTipodocumento = $fkTipodocumento;
    
        return $this;
    }

    /**
     * Get fkTipodocumento
     *
     * @return \SOB\AlbaBundle\Entity\Tipodocumento 
     */
    public function getFkTipodocumento()
    {
        return $this->fkTipodocumento;
    }

    /**
     * Set fkCuenta
     *
     * @param \SOB\AlbaBundle\Entity\Cuenta $fkCuenta
     * @return Responsable
     */
    public function setFkCuenta(\SOB\AlbaBundle\Entity\Cuenta $fkCuenta = null)
    {
        $this->fkCuenta = $fkCuenta;
    
        return $this;
    }

    /**
     * Get fkCuenta
     *
     * @return \SOB\AlbaBundle\Entity\Cuenta 
     */
    public function getFkCuenta()
    {
        return $this->fkCuenta;
    }

    /**
     * Set fkRolresponsable
     *
     * @param \SOB\AlbaBundle\Entity\RolResponsable $fkRolresponsable
     * @return Responsable
     */
    public function setFkRolresponsable(\SOB\AlbaBundle\Entity\RolResponsable $fkRolresponsable = null)
    {
        $this->fkRolresponsable = $fkRolresponsable;
    
        return $this;
    }

    /**
     * Get fkRolresponsable
     *
     * @return \SOB\AlbaBundle\Entity\RolResponsable 
     */
    public function getFkRolresponsable()
    {
        return $this->fkRolresponsable;
    }

    /**
     * Set fkNivelInstruccion
     *
     * @param \SOB\AlbaBundle\Entity\NivelInstruccion $fkNivelInstruccion
     * @return Responsable
     */
    public function setFkNivelInstruccion(\SOB\AlbaBundle\Entity\NivelInstruccion $fkNivelInstruccion = null)
    {
        $this->fkNivelInstruccion = $fkNivelInstruccion;
    
        return $this;
    }

    /**
     * Get fkNivelInstruccion
     *
     * @return \SOB\AlbaBundle\Entity\NivelInstruccion 
     */
    public function getFkNivelInstruccion()
    {
        return $this->fkNivelInstruccion;
    }
}