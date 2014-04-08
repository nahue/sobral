<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelRolresponsableResponsable
 *
 * @ORM\Table(name="rel_rolresponsable_responsable")
 * @ORM\Entity
 */
class RelRolresponsableResponsable
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
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

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
     * @var \Responsable
     *
     * @ORM\ManyToOne(targetEntity="Responsable")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_responsable_id", referencedColumnName="id")
     * })
     */
    private $fkResponsable;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return RelRolresponsableResponsable
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
     * Set fkRolresponsable
     *
     * @param \SOB\AlbaBundle\Entity\RolResponsable $fkRolresponsable
     * @return RelRolresponsableResponsable
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
     * Set fkResponsable
     *
     * @param \SOB\AlbaBundle\Entity\Responsable $fkResponsable
     * @return RelRolresponsableResponsable
     */
    public function setFkResponsable(\SOB\AlbaBundle\Entity\Responsable $fkResponsable = null)
    {
        $this->fkResponsable = $fkResponsable;
    
        return $this;
    }

    /**
     * Get fkResponsable
     *
     * @return \SOB\AlbaBundle\Entity\Responsable 
     */
    public function getFkResponsable()
    {
        return $this->fkResponsable;
    }

    /**
     * Set fkAlumno
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumno
     * @return RelRolresponsableResponsable
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
}