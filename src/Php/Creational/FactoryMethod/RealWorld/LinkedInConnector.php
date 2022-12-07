<?php
namespace src\Php\Creational\FactoryMethod\RealWorld;

/**
 * This Concrete Product implements the LinkedIn API.
 */
require_once("../../../../../vendor/autoload.php");

use src\Php\Creational\FactoryMethod\RealWorld\Contract\SocialNetworkConnector;

class LinkedInConnector implements SocialNetworkConnector
{
    public function __construct(
        private string $login,
        private string $password
    ){}
    
    public function logIn(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    public function logOut(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    public function createPost($content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}