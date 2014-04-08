<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelAlumnoDivision
 *
 * @ORM\Table(name="rel_alumno_division")
 * @ORM\Entity
 */
class RelAlumnoDivision
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
     * Set fkDivision
     *
     * @param \SOB\AlbaBundle\Entity\Division $fkDivision
     * @return RelAlumnoDivision
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
     * Set fkAlumno
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumno
     * @return RelAlumnoDivision
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