<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RelUsuarioPreferencia
 *
 * @ORM\Table(name="rel_usuario_preferencia")
 * @ORM\Entity
 */
class RelUsuarioPreferencia
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
     * @var integer
     *
     * @ORM\Column(name="fk_usuario_id", type="integer", nullable=false)
     */
    private $fkUsuarioId;

    /**
     * @var integer
     *
     * @ORM\Column(name="fk_preferencia_id", type="integer", nullable=false)
     */
    private $fkPreferenciaId;



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
     * Set fkUsuarioId
     *
     * @param integer $fkUsuarioId
     * @return RelUsuarioPreferencia
     */
    public function setFkUsuarioId($fkUsuarioId)
    {
        $this->fkUsuarioId = $fkUsuarioId;
    
        return $this;
    }

    /**
     * Get fkUsuarioId
     *
     * @return integer 
     */
    public function getFkUsuarioId()
    {
        return $this->fkUsuarioId;
    }

    /**
     * Set fkPreferenciaId
     *
     * @param integer $fkPreferenciaId
     * @return RelUsuarioPreferencia
     */
    public function setFkPreferenciaId($fkPreferenciaId)
    {
        $this->fkPreferenciaId = $fkPreferenciaId;
    
        return $this;
    }

    /**
     * Get fkPreferenciaId
     *
     * @return integer 
     */
    public function getFkPreferenciaId()
    {
        return $this->fkPreferenciaId;
    }
}