<?php
namespace src\Php\Creational\FactoryPattern\Conceptual;

require_once "../../../../../vendor/autoload.php";

use src\Php\Creational\FactoryPattern\Conceptual\Interface\Product;
/**
 * Concrete Products provide various implementations of the Product interface.
 */

class ConcreteProduct2 implements Product
{
	
	public function operation(): string
	{
		return "{Result of the ConcreteProduct2}";
	}

}