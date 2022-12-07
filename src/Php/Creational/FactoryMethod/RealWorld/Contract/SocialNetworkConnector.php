<?php
namespace src\Php\Creational\FactoryMethod\RealWorld\Contract;
/**
 * The Product interface declares behaviors of various types of products.
*/


interface SocialNetworkConnector
{
    public function logIn(): void;
    public function logOut(): void;
    public function createPost($content): void;
}