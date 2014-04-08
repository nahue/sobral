<?php

namespace CI\UserBundle\Validator\Constraints;

use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class CorrespondeADocenteValidator extends ConstraintValidator
{

    private $doctrine;
    private $security_context;

    public function __construct(Registry $doctrine, $security_context)
    {
        $this->doctrine         = $doctrine;
        $this->security_context = $security_context;
    }

    /**
     * Checks if the passed value is valid.
     *
     * @param mixed      $value      The value that should be validated
     * @param Constraint $constraint The constraint for the validation
     *
     * @api
     */
    public function validate($value, Constraint $constraint)
    {
        $em = $this->doctrine->getManager('alba');



        try {
            $docente = $em->createQuery(
                'SELECT d FROM SOBAlbaBundle:Docente d
                WHERE d.nroDocumento = :dni'
            )->setParameter('dni', $value)->getSingleResult();
        } catch (NoResultException $e) {
            $this->context->addViolation($constraint->message);
        }



    }
}