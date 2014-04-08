<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelAnioActividad
 *
 * @ORM\Table(name="rel_anio_actividad")
 * @ORM\Entity
 */
class RelAnioActividad
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
     * @var float
     *
     * @ORM\Column(name="horas", type="decimal", nullable=false)
     */
    private $horas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Docente", inversedBy="fkAnioActividad")
     * @ORM\JoinTable(name="rel_anio_actividad_docente",
     *   joinColumns={
     *     @ORM\JoinColumn(name="fk_anio_actividad_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="fk_docente_id", referencedColumnName="id")
     *   }
     * )
     */
    private $fkDocente;

    /**
     * @var \Anio
     *
     * @ORM\ManyToOne(targetEntity="Anio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_anio_id", referencedColumnName="id")
     * })
     */
    private $fkAnio;

    /**
     * @var \Actividad
     *
     * @ORM\ManyToOne(targetEntity="Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_actividad_id", referencedColumnName="id")
     * })
     */
    private $fkActividad;

    /**
     * @var \Orientacion
     *
     * @ORM\ManyToOne(targetEntity="Orientacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_orientacion_id", referencedColumnName="id")
     * })
     */
    private $fkOrientacion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fkDocente = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set horas
     *
     * @param float $horas
     * @return RelAnioActividad
     */
    public function setHoras($horas)
    {
        $this->horas = $horas;
    
        return $this;
    }

    /**
     * Get horas
     *
     * @return float 
     */
    public function getHoras()
    {
        return $this->horas;
    }

    /**
     * Add fkDocente
     *
     * @param \SOB\AlbaBundle\Entity\Docente $fkDocente
     * @return RelAnioActividad
     */
    public function addFkDocente(\SOB\AlbaBundle\Entity\Docente $fkDocente)
    {
        $this->fkDocente[] = $fkDocente;
    
        return $this;
    }

    /**
     * Remove fkDocente
     *
     * @param \SOB\AlbaBundle\Entity\Docente $fkDocente
     */
    public function removeFkDocente(\SOB\AlbaBundle\Entity\Docente $fkDocente)
    {
        $this->fkDocente->removeElement($fkDocente);
    }

    /**
     * Get fkDocente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFkDocente()
    {
        return $this->fkDocente;
    }

    /**
     * Set fkAnio
     *
     * @param \SOB\AlbaBundle\Entity\Anio $fkAnio
     * @return RelAnioActividad
     */
    public function setFkAnio(\SOB\AlbaBundle\Entity\Anio $fkAnio = null)
    {
        $this->fkAnio = $fkAnio;
    
        return $this;
    }

    /**
     * Get fkAnio
     *
     * @return \SOB\AlbaBundle\Entity\Anio 
     */
    public function getFkAnio()
    {
        return $this->fkAnio;
    }

    /**
     * Set fkActividad
     *
     * @param \SOB\AlbaBundle\Entity\Actividad $fkActividad
     * @return RelAnioActividad
     */
    public function setFkActividad(\SOB\AlbaBundle\Entity\Actividad $fkActividad = null)
    {
        $this->fkActividad = $fkActividad;
    
        return $this;
    }

    /**
     * Get fkActividad
     *
     * @return \SOB\AlbaBundle\Entity\Actividad 
     */
    public function getFkActividad()
    {
        return $this->fkActividad;
    }

    /**
     * Set fkOrientacion
     *
     * @param \SOB\AlbaBundle\Entity\Orientacion $fkOrientacion
     * @return RelAnioActividad
     */
    public function setFkOrientacion(\SOB\AlbaBundle\Entity\Orientacion $fkOrientacion = null)
    {
        $this->fkOrientacion = $fkOrientacion;
    
        return $this;
    }

    /**
     * Get fkOrientacion
     *
     * @return \SOB\AlbaBundle\Entity\Orientacion 
     */
    public function getFkOrientacion()
    {
        return $this->fkOrientacion;
    }
}