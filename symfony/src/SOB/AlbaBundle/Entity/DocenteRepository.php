<?php
// src/Acme/StoreBundle/Entity/ProductRepository.php
namespace SOB\AlbaBundle\Entity;

use Doctrine\ORM\EntityRepository;

class DocenteRepository extends EntityRepository
{
    public function getAlumnos($docente_id)
    {
        return $this->find($docente_id);
    }

    public function findByDni($dni)
    {
        $docente = $this->createQuery(
            'SELECT d FROM SOBAlbaBundle:Docente d
            WHERE d.nroDocumento = :dni'
        )->setParameter('dni', $dni)->getSingleResult();
        return $docente;
    }
}