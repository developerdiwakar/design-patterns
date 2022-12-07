<?php
namespace src\Php\Creational\FactoryPattern\Conceptual;

require_once "../../../../../vendor/autoload.php";

use src\Php\Creational\FactoryPattern\Conceptual\Interface\Product;

/**
 * The Creator class declares the factory method that is supposed to return an
 * object of a Product class. The Creator's subclasses usually provide the
 * implementation of this method.
 */

abstract class Creator {
    
    # Factory Method
    abstract public function factoryMethod(): Product;

    # Concrete methods
    public function someOperation(): string 
    {
        # Called the factory method to create an object
        $product = $this->factoryMethod();
        // Now, use the product
        $result = "Creator: The same creator's code has just worked with " . $product->operation();

        return $result;
    }

}