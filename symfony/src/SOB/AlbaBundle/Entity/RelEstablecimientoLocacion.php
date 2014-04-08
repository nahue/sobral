<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelEstablecimientoLocacion
 *
 * @ORM\Table(name="rel_establecimiento_locacion")
 * @ORM\Entity
 */
class RelEstablecimientoLocacion
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
     * @var \Locacion
     *
     * @ORM\ManyToOne(targetEntity="Locacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_locacion_id", referencedColumnName="id")
     * })
     */
    private $fkLocacion;



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
     * @return RelEstablecimientoLocacion
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
     * Set fkLocacion
     *
     * @param \SOB\AlbaBundle\Entity\Locacion $fkLocacion
     * @return RelEstablecimientoLocacion
     */
    public function setFkLocacion(\SOB\AlbaBundle\Entity\Locacion $fkLocacion = null)
    {
        $this->fkLocacion = $fkLocacion;
    
        return $this;
    }

    /**
     * Get fkLocacion
     *
     * @return \SOB\AlbaBundle\Entity\Locacion 
     */
    public function getFkLocacion()
    {
        return $this->fkLocacion;
    }
}