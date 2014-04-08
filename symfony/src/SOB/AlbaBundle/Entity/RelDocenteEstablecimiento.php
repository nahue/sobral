<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelDocenteEstablecimiento
 *
 * @ORM\Table(name="rel_docente_establecimiento")
 * @ORM\Entity
 */
class RelDocenteEstablecimiento
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
     * @var \Establecimiento
     *
     * @ORM\ManyToOne(targetEntity="Establecimiento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_establecimiento_id", referencedColumnName="id")
     * })
     */
    private $fkEstablecimiento;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fkEstablecimiento
     *
     * @param \SOB\AlbaBundle\Entity\Establecimiento $fkEstablecimiento
     * @return RelDocenteEstablecimiento
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
     * Set fkDocente
     *
     * @param \SOB\AlbaBundle\Entity\Docente $fkDocente
     * @return RelDocenteEstablecimiento
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
}