<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

/**
 * Class BaseFixtures 
 * class Crée à fin d'être héritier par la class EleveNotesFixtures  
 */


abstract class BaseFixtures extends Fixture
{
    /** @var ObjectManager */
    private $manager;

    /** @var Generator */
    protected $faker;

    /**
     * methode abstarite à fin d'étre utiliser dans les classes enfant pour crée des données
     * @param ObjectManager $manager
     */
    abstract protected function loadData(ObjectManager $manager);

    /**
     * methode pour créer autant d'objets que nous le souhaitons
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->faker = Factory::create();
        $this->loadData($manager);
    }

    /**
     * methode pour créer plusieurs instance des objets que nous le souhaitons et les Hydrater avec des faux données
     * @param callable $factory
     * @param int $count
     * @param string $className
     */
    protected function createMany(string $className, int $count, callable $factory)
    {
        for ($i = 0; $i < $count; $i++) {
            $entity = new $className();
            $factory($entity, $i);
            $this->manager->persist($entity);
        }
    }
}
