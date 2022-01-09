<?php

namespace App\Repository;

use App\Entity\Note;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Note|null find($id, $lockMode = null, $lockVersion = null)
 * @method Note|null findOneBy(array $criteria, array $orderBy = null)
 * @method Note[]    findAll()
 * @method Note[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Note::class);
    }

    /**
     * methode pour récupérer la moyenne générale de la classe de la base de données
     * @return float
     */ 
    public function findMoyenneClasse()
    {
        return $this->createQueryBuilder('n')
            ->Select('avg(n.resultat) as moyenne_classe')
            ->getQuery()
            ->getSingleScalarResult()
            
        ;
    }
}
