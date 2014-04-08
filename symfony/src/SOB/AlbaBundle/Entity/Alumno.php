<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alumno
 *
 * @ORM\Table(name="alumno")
 * @ORM\Entity
 */
class Alumno
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
     * @ORM\Column(name="legajo_prefijo", type="string", length=10, nullable=false)
     */
    private $legajoPrefijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="legajo_numero", type="integer", nullable=false)
     */
    private $legajoNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_materno", type="string", length=128, nullable=true)
     */
    private $apellidoMaterno;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=128, nullable=false)
     */
    private $apellido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=true)
     */
    private $fechaNacimiento;

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
     * @ORM\Column(name="lugar_nacimiento", type="string", length=128, nullable=true)
     */
    private $lugarNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_documento", type="string", length=16, nullable=true)
     */
    private $nroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=true)
     */
    private $sexo;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="distancia_escuela", type="integer", nullable=true)
     */
    private $distanciaEscuela;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hermanos_escuela", type="boolean", nullable=true)
     */
    private $hermanosEscuela;

    /**
     * @var boolean
     *
     * @ORM\Column(name="hijo_maestro_escuela", type="boolean", nullable=true)
     */
    private $hijoMaestroEscuela;

    /**
     * @var boolean
     *
     * @ORM\Column(name="certificado_medico", type="boolean", nullable=true)
     */
    private $certificadoMedico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var string
     *
     * @ORM\Column(name="procedencia", type="string", length=128, nullable=true)
     */
    private $procedencia;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;

    /**
     * @var string
     *
     * @ORM\Column(name="email_padre", type="string", length=128, nullable=true)
     */
    private $emailPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="celular_padre", type="string", length=20, nullable=true)
     */
    private $celularPadre;

    /**
     * @var string
     *
     * @ORM\Column(name="celular_madre", type="string", length=20, nullable=true)
     */
    private $celularMadre;

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
     * @var \Establecimiento
     *
     * @ORM\ManyToOne(targetEntity="Establecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_establecimiento_id", referencedColumnName="id")
     * })
     */
    private $fkEstablecimiento;

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
     * @var \Conceptobaja
     *
     * @ORM\ManyToOne(targetEntity="Conceptobaja")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_conceptobaja_id", referencedColumnName="id")
     * })
     */
    private $fkConceptobaja;

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
     * @var \Estadosalumnos
     *
     * @ORM\ManyToOne(targetEntity="Estadosalumnos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_estadoalumno_id", referencedColumnName="id")
     * })
     */
    private $fkEstadoalumno;


    /**
     * @ORM\ManyToMany(targetEntity="RelAlumnoDivision")
     * @ORM\JoinTable(name="rel_alumno_division",
     *      joinColumns={@ORM\JoinColumn(name="fk_alumno_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_division_id", referencedColumnName="id")}
     *      )
     */
    private $fkDivisiones;
    
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
     * Set legajoPrefijo
     *
     * @param string $legajoPrefijo
     * @return Alumno
     */
    public function setLegajoPrefijo($legajoPrefijo)
    {
        $this->legajoPrefijo = $legajoPrefijo;
    
        return $this;
    }

    /**
     * Get legajoPrefijo
     *
     * @return string 
     */
    public function getLegajoPrefijo()
    {
        return $this->legajoPrefijo;
    }

    /**
     * Set legajoNumero
     *
     * @param integer $legajoNumero
     * @return Alumno
     */
    public function setLegajoNumero($legajoNumero)
    {
        $this->legajoNumero = $legajoNumero;
    
        return $this;
    }

    /**
     * Get legajoNumero
     *
     * @return integer 
     */
    public function getLegajoNumero()
    {
        return $this->legajoNumero;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Alumno
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
     * Set apellidoMaterno
     *
     * @param string $apellidoMaterno
     * @return Alumno
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
     * Set apellido
     *
     * @param string $apellido
     * @return Alumno
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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     * @return Alumno
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
     * Set direccion
     *
     * @param string $direccion
     * @return Alumno
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
     * @return Alumno
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
     * @return Alumno
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
     * @return Alumno
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
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     * @return Alumno
     */
    public function setLugarNacimiento($lugarNacimiento)
    {
        $this->lugarNacimiento = $lugarNacimiento;
    
        return $this;
    }

    /**
     * Get lugarNacimiento
     *
     * @return string 
     */
    public function getLugarNacimiento()
    {
        return $this->lugarNacimiento;
    }

    /**
     * Set nroDocumento
     *
     * @param string $nroDocumento
     * @return Alumno
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
     * @return Alumno
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
     * @return Alumno
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
     * Set distanciaEscuela
     *
     * @param integer $distanciaEscuela
     * @return Alumno
     */
    public function setDistanciaEscuela($distanciaEscuela)
    {
        $this->distanciaEscuela = $distanciaEscuela;
    
        return $this;
    }

    /**
     * Get distanciaEscuela
     *
     * @return integer 
     */
    public function getDistanciaEscuela()
    {
        return $this->distanciaEscuela;
    }

    /**
     * Set hermanosEscuela
     *
     * @param boolean $hermanosEscuela
     * @return Alumno
     */
    public function setHermanosEscuela($hermanosEscuela)
    {
        $this->hermanosEscuela = $hermanosEscuela;
    
        return $this;
    }

    /**
     * Get hermanosEscuela
     *
     * @return boolean 
     */
    public function getHermanosEscuela()
    {
        return $this->hermanosEscuela;
    }

    /**
     * Set hijoMaestroEscuela
     *
     * @param boolean $hijoMaestroEscuela
     * @return Alumno
     */
    public function setHijoMaestroEscuela($hijoMaestroEscuela)
    {
        $this->hijoMaestroEscuela = $hijoMaestroEscuela;
    
        return $this;
    }

    /**
     * Get hijoMaestroEscuela
     *
     * @return boolean 
     */
    public function getHijoMaestroEscuela()
    {
        return $this->hijoMaestroEscuela;
    }

    /**
     * Set certificadoMedico
     *
     * @param boolean $certificadoMedico
     * @return Alumno
     */
    public function setCertificadoMedico($certificadoMedico)
    {
        $this->certificadoMedico = $certificadoMedico;
    
        return $this;
    }

    /**
     * Get certificadoMedico
     *
     * @return boolean 
     */
    public function getCertificadoMedico()
    {
        return $this->certificadoMedico;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Alumno
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
     * Set procedencia
     *
     * @param string $procedencia
     * @return Alumno
     */
    public function setProcedencia($procedencia)
    {
        $this->procedencia = $procedencia;
    
        return $this;
    }

    /**
     * Get procedencia
     *
     * @return string 
     */
    public function getProcedencia()
    {
        return $this->procedencia;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Alumno
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
     * Set emailPadre
     *
     * @param string $emailPadre
     * @return Alumno
     */
    public function setEmailPadre($emailPadre)
    {
        $this->emailPadre = $emailPadre;
    
        return $this;
    }

    /**
     * Get emailPadre
     *
     * @return string 
     */
    public function getEmailPadre()
    {
        return $this->emailPadre;
    }

    /**
     * Set celularPadre
     *
     * @param string $celularPadre
     * @return Alumno
     */
    public function setCelularPadre($celularPadre)
    {
        $this->celularPadre = $celularPadre;
    
        return $this;
    }

    /**
     * Get celularPadre
     *
     * @return string 
     */
    public function getCelularPadre()
    {
        return $this->celularPadre;
    }

    /**
     * Set celularMadre
     *
     * @param string $celularMadre
     * @return Alumno
     */
    public function setCelularMadre($celularMadre)
    {
        $this->celularMadre = $celularMadre;
    
        return $this;
    }

    /**
     * Get celularMadre
     *
     * @return string 
     */
    public function getCelularMadre()
    {
        return $this->celularMadre;
    }

    /**
     * Set fkProvincia
     *
     * @param \SOB\AlbaBundle\Entity\Provincia $fkProvincia
     * @return Alumno
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
     * @return Alumno
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
     * Set fkEstablecimiento
     *
     * @param \SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento
     * @return Alumno
     */
    public function setFkEstablecimiento(\SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento = null)
    {
        $this->fkEstablecimiento = $fkEstablecimiento;
    
        return $this;
    }

    /**
     * Get fkEstablecimiento
     *
     * @return \SOB\AlbaBundle\Entity\Establecimiento 
     */
    public function getFkEstablecimiento()
    {
        return $this->fkEstablecimiento;
    }

    /**
     * Set fkCuenta
     *
     * @param \SOB\AlbaBundle\Entity\Cuenta $fkCuenta
     * @return Alumno
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
     * Set fkConceptobaja
     *
     * @param \SOB\AlbaBundle\Entity\Conceptobaja $fkConceptobaja
     * @return Alumno
     */
    public function setFkConceptobaja(\SOB\AlbaBundle\Entity\Conceptobaja $fkConceptobaja = null)
    {
        $this->fkConceptobaja = $fkConceptobaja;
    
        return $this;
    }

    /**
     * Get fkConceptobaja
     *
     * @return \SOB\AlbaBundle\Entity\Conceptobaja 
     */
    public function getFkConceptobaja()
    {
        return $this->fkConceptobaja;
    }

    /**
     * Set fkPais
     *
     * @param \SOB\AlbaBundle\Entity\Pais $fkPais
     * @return Alumno
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

    /**
     * Set fkEstadoalumno
     *
     * @param \SOB\AlbaBundle\Entity\Estadosalumnos $fkEstadoalumno
     * @return Alumno
     */
    public function setFkEstadoalumno(\SOB\AlbaBundle\Entity\Estadosalumnos $fkEstadoalumno = null)
    {
        $this->fkEstadoalumno = $fkEstadoalumno;
    
        return $this;
    }

    /**
     * Get fkEstadoalumno
     *
     * @return \SOB\AlbaBundle\Entity\Estadosalumnos 
     */
    public function getFkEstadoalumno()
    {
        return $this->fkEstadoalumno;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkDivisiones = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add fkDivisiones
     *
     * @param \SOB\AlbaBundle\Entity\RelAlumnoDivision $fkDivisiones
     * @return Alumno
     */
    public function addFkDivisione(\SOB\AlbaBundle\Entity\RelAlumnoDivision $fkDivisiones)
    {
        $this->fkDivisiones[] = $fkDivisiones;
    
        return $this;
    }

    /**
     * Remove fkDivisiones
     *
     * @param \SOB\AlbaBundle\Entity\RelAlumnoDivision $fkDivisiones
     */
    public function removeFkDivisione(\SOB\AlbaBundle\Entity\RelAlumnoDivision $fkDivisiones)
    {
        $this->fkDivisiones->removeElement($fkDivisiones);
    }

    /**
     * Get fkDivisiones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkDivisiones()
    {
        return $this->fkDivisiones;
    }
}