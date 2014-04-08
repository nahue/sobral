<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity
 */
class Usuario
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
     * @ORM\Column(name="usuario", type="string", length=32, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=48, nullable=false)
     */
    private $clave;

    /**
     * @var boolean
     *
     * @ORM\Column(name="correo_publico", type="boolean", nullable=true)
     */
    private $correoPublico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="activo", type="boolean", nullable=false)
     */
    private $activo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creado", type="datetime", nullable=false)
     */
    private $fechaCreado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_actualizado", type="datetime", nullable=false)
     */
    private $fechaActualizado;

    /**
     * @var string
     *
     * @ORM\Column(name="seguridad_pregunta", type="string", length=128, nullable=true)
     */
    private $seguridadPregunta;

    /**
     * @var string
     *
     * @ORM\Column(name="seguridad_respuesta", type="string", length=128, nullable=true)
     */
    private $seguridadRespuesta;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="borrado", type="boolean", nullable=false)
     */
    private $borrado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Permiso", inversedBy="fkUsuario")
     * @ORM\JoinTable(name="usuario_permiso",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_permiso_id", referencedColumnName="id")
     *   }
     * )
     */
    private $fkPermiso;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Rol", inversedBy="fkUsuario")
     * @ORM\JoinTable(name="usuario_rol",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_usuario_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_rol_id", referencedColumnName="id")
     *   }
     * )
     */
    private $fkRol;

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
     * Constructor
     */
    public function __construct()
    {
        $this->fkPermiso = new \Doctrine\Common\Collections\ArrayCollection();
        $this->fkRol = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return Usuario
     */
    public function setClave($clave)
    {
        $this->clave = $clave;
    
        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set correoPublico
     *
     * @param boolean $correoPublico
     * @return Usuario
     */
    public function setCorreoPublico($correoPublico)
    {
        $this->correoPublico = $correoPublico;
    
        return $this;
    }

    /**
     * Get correoPublico
     *
     * @return boolean 
     */
    public function getCorreoPublico()
    {
        return $this->correoPublico;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return Usuario
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
     * Set fechaCreado
     *
     * @param \DateTime $fechaCreado
     * @return Usuario
     */
    public function setFechaCreado($fechaCreado)
    {
        $this->fechaCreado = $fechaCreado;
    
        return $this;
    }

    /**
     * Get fechaCreado
     *
     * @return \DateTime 
     */
    public function getFechaCreado()
    {
        return $this->fechaCreado;
    }

    /**
     * Set fechaActualizado
     *
     * @param \DateTime $fechaActualizado
     * @return Usuario
     */
    public function setFechaActualizado($fechaActualizado)
    {
        $this->fechaActualizado = $fechaActualizado;
    
        return $this;
    }

    /**
     * Get fechaActualizado
     *
     * @return \DateTime 
     */
    public function getFechaActualizado()
    {
        return $this->fechaActualizado;
    }

    /**
     * Set seguridadPregunta
     *
     * @param string $seguridadPregunta
     * @return Usuario
     */
    public function setSeguridadPregunta($seguridadPregunta)
    {
        $this->seguridadPregunta = $seguridadPregunta;
    
        return $this;
    }

    /**
     * Get seguridadPregunta
     *
     * @return string 
     */
    public function getSeguridadPregunta()
    {
        return $this->seguridadPregunta;
    }

    /**
     * Set seguridadRespuesta
     *
     * @param string $seguridadRespuesta
     * @return Usuario
     */
    public function setSeguridadRespuesta($seguridadRespuesta)
    {
        $this->seguridadRespuesta = $seguridadRespuesta;
    
        return $this;
    }

    /**
     * Get seguridadRespuesta
     *
     * @return string 
     */
    public function getSeguridadRespuesta()
    {
        return $this->seguridadRespuesta;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
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
     * Set borrado
     *
     * @param boolean $borrado
     * @return Usuario
     */
    public function setBorrado($borrado)
    {
        $this->borrado = $borrado;
    
        return $this;
    }

    /**
     * Get borrado
     *
     * @return boolean 
     */
    public function getBorrado()
    {
        return $this->borrado;
    }

    /**
     * Add fkPermiso
     *
     * @param \SOB\AlbaBundle\Entity\Permiso $fkPermiso
     * @return Usuario
     */
    public function addFkPermiso(\SOB\AlbaBundle\Entity\Permiso $fkPermiso)
    {
        $this->fkPermiso[] = $fkPermiso;
    
        return $this;
    }

    /**
     * Remove fkPermiso
     *
     * @param \SOB\AlbaBundle\Entity\Permiso $fkPermiso
     */
    public function removeFkPermiso(\SOB\AlbaBundle\Entity\Permiso $fkPermiso)
    {
        $this->fkPermiso->removeElement($fkPermiso);
    }

    /**
     * Get fkPermiso
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkPermiso()
    {
        return $this->fkPermiso;
    }

    /**
     * Add fkRol
     *
     * @param \SOB\AlbaBundle\Entity\Rol $fkRol
     * @return Usuario
     */
    public function addFkRol(\SOB\AlbaBundle\Entity\Rol $fkRol)
    {
        $this->fkRol[] = $fkRol;
    
        return $this;
    }

    /**
     * Remove fkRol
     *
     * @param \SOB\AlbaBundle\Entity\Rol $fkRol
     */
    public function removeFkRol(\SOB\AlbaBundle\Entity\Rol $fkRol)
    {
        $this->fkRol->removeElement($fkRol);
    }

    /**
     * Get fkRol
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkRol()
    {
        return $this->fkRol;
    }

    /**
     * Set fkEstablecimiento
     *
     * @param \SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento
     * @return Usuario
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

}