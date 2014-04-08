<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelDivisionActividadDocente
 *
 * @ORM\Table(name="rel_division_actividad_docente")
 * @ORM\Entity
 */
class RelDivisionActividadDocente
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
     * @var \Division
     *
     * @ORM\ManyToOne(targetEntity="Division")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_division_id", referencedColumnName="id")
     * })
     */
    private $fkDivision;

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
     * @var \Docente
     *
     * @ORM\ManyToOne(targetEntity="Docente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_docente_id", referencedColumnName="id")
     * })
     */
    private $fkDocente;

    /**
     * @var \Evento
     *
     * @ORM\ManyToOne(targetEntity="Evento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_evento_id", referencedColumnName="id")
     * })
     */
    private $fkEvento;



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
     * Set fkDivision
     *
     * @param \SOB\AlbaBundle\Entity\Division $fkDivision
     * @return RelDivisionActividadDocente
     */
    public function setFkDivision(\SOB\AlbaBundle\Entity\Division $fkDivision = null)
    {
        $this->fkDivision = $fkDivision;
    
        return $this;
    }

    /**
     * Get fkDivision
     *
     * @return \SOB\AlbaBundle\Entity\Division 
     */
    public function getFkDivision()
    {
        return $this->fkDivision;
    }

    /**
     * Set fkActividad
     *
     * @param \SOB\AlbaBundle\Entity\Actividad $fkActividad
     * @return RelDivisionActividadDocente
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
     * Set fkDocente
     *
     * @param \SOB\AlbaBundle\Entity\Docente $fkDocente
     * @return RelDivisionActividadDocente
     */
    public function setFkDocente(\SOB\AlbaBundle\Entity\Docente $fkDocente = null)
    {
        $this->fkDocente = $fkDocente;
    
        return $this;
    }

    /**
     * Get fkDocente
     *
     * @return \SOB\AlbaBundle\Entity\Docente 
     */
    public function getFkDocente()
    {
        return $this->fkDocente;
    }

    /**
     * Set fkEvento
     *
     * @param \SOB\AlbaBundle\Entity\Evento $fkEvento
     * @return RelDivisionActividadDocente
     */
    public function setFkEvento(\SOB\AlbaBundle\Entity\Evento $fkEvento = null)
    {
        $this->fkEvento = $fkEvento;
    
        return $this;
    }

    /**
     * Get fkEvento
     *
     * @return \SOB\AlbaBundle\Entity\Evento 
     */
    public function getFkEvento()
    {
        return $this->fkEvento;
    }
}