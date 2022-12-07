<?php
namespace src\Php\Creational\FactoryPattern\RealWorld;

/**
 * This Concrete Creator supports LinkeIn. Remember that this class also
 * inherits the 'post' method from the parent class. Concrete Creators are the
 * classes that the Client actually uses.
 */

require_once "../../../../../vendor/autoload.php";
use src\Php\Creational\FactoryPattern\RealWorld\SocialNetworkPoster;
use src\Php\Creational\FactoryPattern\RealWorld\Contract\SocialNetworkConnector;


class LinkedInPoster extends SocialNetworkPoster
{
    public function __construct(
        private string $login,
        private string $password
    ){}
    
    public function getSocialNetwork(): SocialNetworkConnector
    {
        return new LinkedInConnector($this->login, $this->password);
    }

}