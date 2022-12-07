<?php
namespace src\Php\Creational\FactoryMethod\RealWorld;

/**
 * The Creator declares a factory method that can be used as a substitution for
 * the direct constructor calls of products, for instance:
 *
 * - Before: $p = new FacebookConnector();
 * - After: $p = $this->getSocialNetwork;
 *
 * This allows changing the type of the product being created by
 * SocialNetworkPoster's subclasses.
*/
require_once "../../../../../vendor/autoload.php";

use src\Php\Creational\FactoryMethod\RealWorld\Contract\SocialNetworkConnector;

abstract class SocialNetworkPoster 
{
/**
 * The actual factory method. Note that it returns the abstract connector.
 * This lets subclasses return any concrete connectors without breaking the
 * superclass' contract.
 */
    abstract public function getSocialNetwork(): SocialNetworkConnector;
    
    /**
     * When the factory method is used inside the Creator's business logic, the
     * subclasses may alter the logic indirectly by returning different types of
     * the connector from the factory method.
     */
    public function post($content): void
    {
        // Call the factory method to create a product object...
        $network = $this->getSocialNetwork();
        // ..then use it as you will
        $network->login();
        $network->createPost($content);
        $network->logout();
    }
    
}