<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Legajopedagogico
 *
 * @ORM\Table(name="legajopedagogico")
 * @ORM\Entity
 */
class Legajopedagogico
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="text", nullable=false)
     */
    private $resumen;

    /**
     * @var string
     *
     * @ORM\Column(name="texto", type="text", nullable=false)
     */
    private $texto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \Alumno
     *
     * @ORM\ManyToOne(targetEntity="Alumno")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_alumno_id", referencedColumnName="id")
     * })
     */
    private $fkAlumno;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_usuario_id", referencedColumnName="id")
     * })
     */
    private $fkUsuario;

    /**
     * @var \Legajocategoria
     *
     * @ORM\ManyToOne(targetEntity="Legajocategoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_legajocategoria_id", referencedColumnName="id")
     * })
     */
    private $fkLegajocategoria;



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
     * Set titulo
     *
     * @param string $titulo
     * @return Legajopedagogico
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
     * Set resumen
     *
     * @param string $resumen
     * @return Legajopedagogico
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;
    
        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set texto
     *
     * @param string $texto
     * @return Legajopedagogico
     */
    public function setTexto($texto)
    {
        $this->texto = $texto;
    
        return $this;
    }

    /**
     * Get texto
     *
     * @return string 
     */
    public function getTexto()
    {
        return $this->texto;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Legajopedagogico
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    
        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fkAlumno
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumno
     * @return Legajopedagogico
     */
    public function setFkAlumno(\SOB\AlbaBundle\Entity\Alumno $fkAlumno = null)
    {
        $this->fkAlumno = $fkAlumno;
    
        return $this;
    }

    /**
     * Get fkAlumno
     *
     * @return \SOB\AlbaBundle\Entity\Alumno 
     */
    public function getFkAlumno()
    {
        return $this->fkAlumno;
    }

    /**
     * Set fkUsuario
     *
     * @param \SOB\AlbaBundle\Entity\Usuario $fkUsuario
     * @return Legajopedagogico
     */
    public function setFkUsuario(\SOB\AlbaBundle\Entity\Usuario $fkUsuario = null)
    {
        $this->fkUsuario = $fkUsuario;
    
        return $this;
    }

    /**
     * Get fkUsuario
     *
     * @return \SOB\AlbaBundle\Entity\Usuario 
     */
    public function getFkUsuario()
    {
        return $this->fkUsuario;
    }

    /**
     * Set fkLegajocategoria
     *
     * @param \SOB\AlbaBundle\Entity\Legajocategoria $fkLegajocategoria
     * @return Legajopedagogico
     */
    public function setFkLegajocategoria(\SOB\AlbaBundle\Entity\Legajocategoria $fkLegajocategoria = null)
    {
        $this->fkLegajocategoria = $fkLegajocategoria;
    
        return $this;
    }

    /**
     * Get fkLegajocategoria
     *
     * @return \SOB\AlbaBundle\Entity\Legajocategoria 
     */
    public function getFkLegajocategoria()
    {
        return $this->fkLegajocategoria;
    }
}