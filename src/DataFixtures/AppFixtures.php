<?php

namespace App\DataFixtures;

use App\Factory\CommentFactory;
use App\Factory\ProductFactory;
use App\Factory\TagFactory;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
  public function load(ObjectManager $manager): void
  {
    TagFactory::createMany(5);
    ProductFactory::createMany(20, [
      'comment' => CommentFactory::new()->many(0, 5),
      'tags'     => TagFactory::randomRange(2, 5)

    ]);
  }
}



/*
 * Para cargar datos falsos a nuestras tablas debemos agregar el componente:
 * $ composer require orm-fixtures --dev
 * 
 * Una ves instalado se crea un directorio llamado DataFixtures
 * $ AppFixtures.php
 * 
 * Para cargar estos datos a la tabla utilizamos:
 * $ php bin/console doctrine:fixtrues:load
 */