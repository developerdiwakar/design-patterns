<?php
namespace src\Php\Creational\FactoryMethod\Conceptual;

require_once "../../../../../vendor/autoload.php";

use src\Php\Creational\FactoryMethod\Conceptual\Interface\Product;

/**
 * Note that the signature of the method still uses the abstract product
 * type, even though the concrete product is actually returned from the
 * method. This way the Creator can stay independent of concrete product
 * classes.
 */
class ConcreteCreator2 extends Creator
{
	
	public function factoryMethod(): Product
	{
		return new ConcreteProduct2();
	}

}