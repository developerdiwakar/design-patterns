<?php 
namespace src\Php\Creational\FactoryMethod\RealWorld;

/**
 * The client code can work with any subclass of SocialNetworkPoster since it
 * doesn't depend on concrete classes.
*/
require_once "../../../../../vendor/autoload.php";


class ClientCode
{
    public function __construct(private SocialNetworkPoster $creator)
    {
        $this->creator->post("Hello World!");
        $this->creator->post("I had a long night coding today!");
    }
}

/**
 * During the initialization phase, the app can decide which social network it
 * wants to work with, create an object of the proper subclass, and pass it to
 * the client code.
*/
echo "Testing ConcreteCreator1:\n";
new ClientCode(new FacebookPoster("john_smith", "122***"));
echo "Testing ConcreteCreator2:\n";
new ClientCode(new LinkedInPoster("john_smith", "122***"));
