<?php
namespace src\Php\Creational\FactoryMethod\Conceptual;

require_once "../../../../../vendor/autoload.php";

use src\Php\Creational\FactoryMethod\Conceptual\Interface\Product;
/**
 * Concrete Products provide various implementations of the Product interface.
 */

class ConcreteProduct1 implements Product
{
	
	public function operation(): string
	{
		return "{Result of the ConcreteProduct1}";
	}

}