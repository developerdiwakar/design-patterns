<?php
namespace src\Php\Creational\FactoryMethod\RealWorld;

/**
 * This Concrete Creator supports Facebook. Remember that this class also
 * inherits the 'post' method from the parent class. Concrete Creators are the
 * classes that the Client actually uses.
*/

require_once "../../../../../vendor/autoload.php";

use src\Php\Creational\FactoryMethod\RealWorld\Contract\SocialNetworkConnector;


class FacebookPoster extends SocialNetworkPoster
{
    public function __construct(
        private string $login,
        private string $password
    ){}
    
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new FacebookConnector($this->login, $this->password);
    }

}