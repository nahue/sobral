<?php
namespace CI\UserBundle\Validator\Constraints;

use \Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class CorrespondeADocente extends Constraint
{
    public $message = 'El usuario no corresponde con un Docente activo.';

    public function validatedBy()
    {
        return 'corresponde_a_docente';
    }

    public function getTargets()
    {
        return self::PROPERTY_CONSTRAINT;
    }
} 