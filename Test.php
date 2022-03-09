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
        $this->manager = new Demand();
    }

    public function test_demand(){
        $person = new Person();
        $person->setName('Ahmed');
        $person->setId(12);
        $person->setAmount(14.3);
        $this->manager->setDemander($person);

        $person = new Person();
        $person->setName('Aya');
        $person->setId(32);
        $person->setAmount(64.9);
        $this->manager->setDemander($person);


        $person = new Person();
        $person->setName('Anas');
        $person->setId(21);
        $person->setAmount(890.8);
        $this->manager->setDemander($person);


        print_r($this->manager->getDemander());
        echo '<br/>';

        echo $this->manager->sum();


    }
    public function test_debat(){
        $person = new Person();
        $person->setName('Ahmed');
        $person->setId(12);
        $person->setAmount(14.3);
        $this->manager->setDebator($person);

        $person = new Person();
        $person->setName('Aya');
        $person->setId(32);
        $person->setAmount(64.9);
        $this->manager->setDebator($person);


        $person = new Person();
        $person->setName('Anas');
        $person->setId(21);
        $person->setAmount(890.8);
        $this->manager->setDebator($person);


        print_r($this->manager->getDebator());
        echo '<br/>';

        echo $this->manager->sum();


    }

}
$test= new Test();
$test->test_demand();


$test= new Test();
$test->test_debat();

public function fiance_status()
{
    $test = new Test();
    $financeresult=$test->test_demand()->sum()-$test->test_debat->sum();
    echo $financeresult;
}
