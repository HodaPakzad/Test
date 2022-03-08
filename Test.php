<?php
require_once 'Person.php';
require_once 'ITransaction.php';
require_once 'Debat.php';
require_once 'Demand.php';


class Test
{
    public $manager;

    public function __construct()
    {
        $this->manager = new Person();
    }

    public function test_demand(){
        $person = new Person();
        $person->getName('Ahmed');
        $person->getId(12);
        $person->getAmount(14.3);
        $this->manager->setdemander($person);

        $person = new Person();
        $person->getName('Aya');
        $person->getId(32);
        $person->getAmount(64.9);
        $this->manager->setdemander($person);


        $person = new Person();
        $person->getName('Anas');
        $person->getId(21);
        $person->getAmount(890.8);
        $this->manager->setdemander($person);


        var_dump($this->manager->getDemander());
        echo '<br/>';

        echo sum();


    }

}
