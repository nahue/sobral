<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Legajoadjunto
 *
 * @ORM\Table(name="legajoadjunto")
 * @ORM\Entity
 */
class Legajoadjunto
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
     * @var \Legajopedagogico
     *
     * @ORM\ManyToOne(targetEntity="Legajopedagogico")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_legajopedagogico_id", referencedColumnName="id")
     * })
     */
    private $fkLegajopedagogico;

    /**
     * @var \Adjunto
     *
     * @ORM\ManyToOne(targetEntity="Adjunto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_adjunto_id", referencedColumnName="id")
     * })
     */
    private $fkAdjunto;



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
     * Set fkLegajopedagogico
     *
     * @param \SOB\AlbaBundle\Entity\Legajopedagogico $fkLegajopedagogico
     * @return Legajoadjunto
     */
    public function setFkLegajopedagogico(\SOB\AlbaBundle\Entity\Legajopedagogico $fkLegajopedagogico = null)
    {
        $this->fkLegajopedagogico = $fkLegajopedagogico;
    
        return $this;
    }

    /**
     * Get fkLegajopedagogico
     *
     * @return \SOB\AlbaBundle\Entity\Legajopedagogico 
     */
    public function getFkLegajopedagogico()
    {
        return $this->fkLegajopedagogico;
    }

    /**
     * Set fkAdjunto
     *
     * @param \SOB\AlbaBundle\Entity\Adjunto $fkAdjunto
     * @return Legajoadjunto
     */
    public function setFkAdjunto(\SOB\AlbaBundle\Entity\Adjunto $fkAdjunto = null)
    {
        $this->fkAdjunto = $fkAdjunto;
    
        return $this;
    }

    /**
     * Get fkAdjunto
     *
     * @return \SOB\AlbaBundle\Entity\Adjunto 
     */
    public function getFkAdjunto()
    {
        return $this->fkAdjunto;
    }
}