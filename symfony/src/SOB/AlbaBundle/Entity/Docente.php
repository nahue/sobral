<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Docente
 *
 * @ORM\Table(name="docente")
 * @ORM\Entity(repositoryClass="SOB\AlbaBundle\Entity\DocenteRepository")
 * @ORM\Entity
 */

class Docente
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
     * @ORM\Column(name="nombre", type="string", length=128, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="estado_civil", type="string", length=1, nullable=false)
     */
    private $estadoCivil;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=1, nullable=false)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_nacimiento", type="datetime", nullable=false)
     */
    private $fechaNacimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="nro_documento", type="string", length=16, nullable=false)
     */
    private $nroDocumento;

    /**
     * @var string
     *
     * @ORM\Column(name="lugar_nacimiento", type="string", length=128, nullable=true)
     */
    private $lugarNacimiento;

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
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_movil", type="string", length=20, nullable=true)
     */
    private $telefonoMovil;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=128, nullable=false)
     */
    private $titulo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="libreta_sanitaria", type="boolean", nullable=true)
     */
    private $libretaSanitaria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="psicofisico", type="boolean", nullable=true)
     */
    private $psicofisico;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="string", length=255, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=true)
     */
    private $activo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Evento", inversedBy="fkDocente")
     * @ORM\JoinTable(name="docente_horario",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_docente_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_evento_id", referencedColumnName="id")
     *   }
     * )
     */
    private $fkEvento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="RelAnioActividad", mappedBy="fkDocente")
     */
    private $fkAnioActividad;

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
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_provincia_id", referencedColumnName="id")
     * })
     */
    private $fkProvincia;

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
     * @ORM\ManyToMany(targetEntity="Division")
     * @ORM\JoinTable(name="rel_division_actividad_docente",
     *      joinColumns={@ORM\JoinColumn(name="fk_docente_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="fk_division_id", referencedColumnName="id")}
     *      )
     */
    private $fkDivisiones;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkEvento        = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkAnioActividad = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Docente
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
     *
     * @return Docente
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Docente
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
     * Set estadoCivil
     *
     * @param string $estadoCivil
     *
     * @return Docente
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Docente
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
     * Set fechaNacimiento
     *
     * @param \DateTime $fechaNacimiento
     *
     * @return Docente
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
     * Set nroDocumento
     *
     * @param string $nroDocumento
     *
     * @return Docente
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
     * Set lugarNacimiento
     *
     * @param string $lugarNacimiento
     *
     * @return Docente
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
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Docente
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
     *
     * @return Docente
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
     *
     * @return Docente
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
     * Set email
     *
     * @param string $email
     *
     * @return Docente
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Docente
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
     * Set telefonoMovil
     *
     * @param string $telefonoMovil
     *
     * @return Docente
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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Docente
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set libretaSanitaria
     *
     * @param boolean $libretaSanitaria
     *
     * @return Docente
     */
    public function setLibretaSanitaria($libretaSanitaria)
    {
        $this->libretaSanitaria = $libretaSanitaria;

        return $this;
    }

    /**
     * Get libretaSanitaria
     *
     * @return boolean
     */
    public function getLibretaSanitaria()
    {
        return $this->libretaSanitaria;
    }

    /**
     * Set psicofisico
     *
     * @param boolean $psicofisico
     *
     * @return Docente
     */
    public function setPsicofisico($psicofisico)
    {
        $this->psicofisico = $psicofisico;

        return $this;
    }

    /**
     * Get psicofisico
     *
     * @return boolean
     */
    public function getPsicofisico()
    {
        return $this->psicofisico;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     *
     * @return Docente
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Docente
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
     * Add fkEvento
     *
     * @param \SOB\AlbaBundle\Entity\Evento $fkEvento
     *
     * @return Docente
     */
    public function addFkEvento(\SOB\AlbaBundle\Entity\Evento $fkEvento)
    {
        $this->fkEvento[] = $fkEvento;

        return $this;
    }

    /**
     * Remove fkEvento
     *
     * @param \SOB\AlbaBundle\Entity\Evento $fkEvento
     */
    public function removeFkEvento(\SOB\AlbaBundle\Entity\Evento $fkEvento)
    {
        $this->fkEvento->removeElement($fkEvento);
    }

    /**
     * Get fkEvento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFkEvento()
    {
        return $this->fkEvento;
    }

    /**
     * Add fkAnioActividad
     *
     * @param \SOB\AlbaBundle\Entity\RelAnioActividad $fkAnioActividad
     *
     * @return Docente
     */
    public function addFkAnioActividad(\SOB\AlbaBundle\Entity\RelAnioActividad $fkAnioActividad)
    {
        $this->fkAnioActividad[] = $fkAnioActividad;

        return $this;
    }

    /**
     * Remove fkAnioActividad
     *
     * @param \SOB\AlbaBundle\Entity\RelAnioActividad $fkAnioActividad
     */
    public function removeFkAnioActividad(\SOB\AlbaBundle\Entity\RelAnioActividad $fkAnioActividad)
    {
        $this->fkAnioActividad->removeElement($fkAnioActividad);
    }

    /**
     * Get fkAnioActividad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFkAnioActividad()
    {
        return $this->fkAnioActividad;
    }

    /**
     * Set fkTipodocumento
     *
     * @param \SOB\AlbaBundle\Entity\Tipodocumento $fkTipodocumento
     *
     * @return Docente
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
     * Set fkProvincia
     *
     * @param \SOB\AlbaBundle\Entity\Provincia $fkProvincia
     *
     * @return Docente
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
     * Set fkPais
     *
     * @param \SOB\AlbaBundle\Entity\Pais $fkPais
     *
     * @return Docente
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
     * Add fkDivisiones
     *
     * @param \SOB\AlbaBundle\Entity\Division $fkDivisiones
     *
     * @return Docente
     */
    public function addFkDivisione(\SOB\AlbaBundle\Entity\Division $fkDivisiones)
    {
        $this->fkDivisiones[] = $fkDivisiones;

        return $this;
    }

    /**
     * Remove fkDivisiones
     *
     * @param \SOB\AlbaBundle\Entity\Division $fkDivisiones
     */
    public function removeFkDivisione(\SOB\AlbaBundle\Entity\Division $fkDivisiones)
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