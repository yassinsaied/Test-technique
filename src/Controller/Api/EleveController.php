<?php


namespace App\Controller\Api;

use App\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


/**
 * Class EleveController
 * Permet de récupérer la moyenne générale de la classe 
 */
class EleveController extends AbstractController
{


   
    /**
     * methode pour récupérer la moyenne générale de la classe des élève pour l'utilser a l'api Eleve
     * @return float
     */ 

    public function getMoyenneClasse() :float

    {
        $moyenneClasse =  $this->getDoctrine()->getManager()->getRepository(Note::class)->findMoyenneClasse();
        return $moyenneClasse;
    }
 
}