<?php

namespace App\DataFixtures;

use App\Entity\Eleve;
use App\Entity\Note;
use Doctrine\Persistence\ObjectManager;

/**
 * Class EleveNotesFixtures 
 * classe qui permet de Hydrater des entités Eleve et Note dans la base de données.
 */

class EleveNotesFixtures extends BaseFixtures
{


    /**
     *  methode pour Hydrater les objets Eleve et Note avec des faux données avec  le EntityManager 
     *  @param ObjectManager $manager
     */


    public function loadData(ObjectManager $manager)
    {

        $this->createMany(Eleve::class, 20, function (Eleve $eleve, $count) {

            $eleve->setNom($this->faker->firstName);
            $eleve->setPrenom($this->faker->lastName);
            $eleve->setDateNaissance($this->faker->dateTimeBetween('-15 years', '-11 years'));
            $this->createMany(Note::class, 6, function (Note $note, $count) use ($eleve) {

                $matiers = array("Mathematique", "Physique", "Philosophie", "literature", "Histoire", "Géographie");
                $note->setEleve($eleve);
                $note->setResultat($this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20));
                $note->setMatiere($matiers[$count]);
            });
        });

        $manager->flush();
    }
}
