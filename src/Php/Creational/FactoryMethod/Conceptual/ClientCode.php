<?php
namespace src\Php\Creational\FactoryMethod\Conceptual;

require_once "../../../../../vendor/autoload.php";
/**
 * The client code works with an instance of a concrete creator, albeit through
 * its base interface. As long as the client keeps working with the creator via
 * the base interface, you can pass it any creator's subclass.
*/

class ClientCode {

	// Using constructor property promotion
	public function __construct(private Creator $creator){
		// $this->creator = $creator;
		$this->output($this->creator);
	}

	public function output(){

		echo "Client: I'm not aware of the creator's class, but it still works.\n"
		        . $this->creator->someOperation();
	}

}



try {

	echo "\n\n";
	echo "App: Launched with the ConcreteCreator1.\n";
	new ClientCode(new ConcreteCreator1());
	echo "\n\n";
	echo "App: Launched with the ConcreteCreator2.\n";
	new ClientCode(new ConcreteCreator2());
	echo "\n\n";
}catch(\Exception $e){
	// print_r($e);
	echo $e->getMessage();
}