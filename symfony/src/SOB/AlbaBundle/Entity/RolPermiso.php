<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolPermiso
 *
 * @ORM\Table(name="rol_permiso")
 * @ORM\Entity
 */
class RolPermiso
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
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_rol_id", referencedColumnName="id")
     * })
     */
    private $fkRol;

    /**
     * @var \Permiso
     *
     * @ORM\ManyToOne(targetEntity="Permiso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_permiso_id", referencedColumnName="id")
     * })
     */
    private $fkPermiso;



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
     * Set fkRol
     *
     * @param \SOB\AlbaBundle\Entity\Rol $fkRol
     * @return RolPermiso
     */
    public function setFkRol(\SOB\AlbaBundle\Entity\Rol $fkRol = null)
    {
        $this->fkRol = $fkRol;
    
        return $this;
    }

    /**
     * Get fkRol
     *
     * @return \SOB\AlbaBundle\Entity\Rol 
     */
    public function getFkRol()
    {
        return $this->fkRol;
    }

    /**
     * Set fkPermiso
     *
     * @param \SOB\AlbaBundle\Entity\Permiso $fkPermiso
     * @return RolPermiso
     */
    public function setFkPermiso(\SOB\AlbaBundle\Entity\Permiso $fkPermiso = null)
    {
        $this->fkPermiso = $fkPermiso;
    
        return $this;
    }

    /**
     * Get fkPermiso
     *
     * @return \SOB\AlbaBundle\Entity\Permiso 
     */
    public function getFkPermiso()
    {
        return $this->fkPermiso;
    }
}