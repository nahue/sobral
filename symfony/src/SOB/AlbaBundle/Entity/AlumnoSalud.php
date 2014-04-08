<?php

namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnoSalud
 *
 * @ORM\Table(name="alumno_salud")
 * @ORM\Entity
 */
class AlumnoSalud
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
     * @ORM\Column(name="cobertura_medica", type="string", length=255, nullable=true)
     */
    private $coberturaMedica;

    /**
     * @var string
     *
     * @ORM\Column(name="cobertura_telefono", type="string", length=40, nullable=true)
     */
    private $coberturaTelefono;

    /**
     * @var string
     *
     * @ORM\Column(name="cobertura_observaciones", type="string", length=255, nullable=true)
     */
    private $coberturaObservaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="medico_nombre", type="string", length=255, nullable=true)
     */
    private $medicoNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="medico_domicilio", type="string", length=255, nullable=true)
     */
    private $medicoDomicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="medico_telefono", type="string", length=20, nullable=true)
     */
    private $medicoTelefono;

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
     * Set coberturaMedica
     *
     * @param string $coberturaMedica
     * @return AlumnoSalud
     */
    public function setCoberturaMedica($coberturaMedica)
    {
        $this->coberturaMedica = $coberturaMedica;
    
        return $this;
    }

    /**
     * Get coberturaMedica
     *
     * @return string 
     */
    public function getCoberturaMedica()
    {
        return $this->coberturaMedica;
    }

    /**
     * Set coberturaTelefono
     *
     * @param string $coberturaTelefono
     * @return AlumnoSalud
     */
    public function setCoberturaTelefono($coberturaTelefono)
    {
        $this->coberturaTelefono = $coberturaTelefono;
    
        return $this;
    }

    /**
     * Get coberturaTelefono
     *
     * @return string 
     */
    public function getCoberturaTelefono()
    {
        return $this->coberturaTelefono;
    }

    /**
     * Set coberturaObservaciones
     *
     * @param string $coberturaObservaciones
     * @return AlumnoSalud
     */
    public function setCoberturaObservaciones($coberturaObservaciones)
    {
        $this->coberturaObservaciones = $coberturaObservaciones;
    
        return $this;
    }

    /**
     * Get coberturaObservaciones
     *
     * @return string 
     */
    public function getCoberturaObservaciones()
    {
        return $this->coberturaObservaciones;
    }

    /**
     * Set medicoNombre
     *
     * @param string $medicoNombre
     * @return AlumnoSalud
     */
    public function setMedicoNombre($medicoNombre)
    {
        $this->medicoNombre = $medicoNombre;
    
        return $this;
    }

    /**
     * Get medicoNombre
     *
     * @return string 
     */
    public function getMedicoNombre()
    {
        return $this->medicoNombre;
    }

    /**
     * Set medicoDomicilio
     *
     * @param string $medicoDomicilio
     * @return AlumnoSalud
     */
    public function setMedicoDomicilio($medicoDomicilio)
    {
        $this->medicoDomicilio = $medicoDomicilio;
    
        return $this;
    }

    /**
     * Get medicoDomicilio
     *
     * @return string 
     */
    public function getMedicoDomicilio()
    {
        return $this->medicoDomicilio;
    }

    /**
     * Set medicoTelefono
     *
     * @param string $medicoTelefono
     * @return AlumnoSalud
     */
    public function setMedicoTelefono($medicoTelefono)
    {
        $this->medicoTelefono = $medicoTelefono;
    
        return $this;
    }

    /**
     * Get medicoTelefono
     *
     * @return string 
     */
    public function getMedicoTelefono()
    {
        return $this->medicoTelefono;
    }

    /**
     * Set fkAlumno
     *
     * @param \SOB\AlbaBundle\Entity\Alumno $fkAlumno
     * @return AlumnoSalud
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