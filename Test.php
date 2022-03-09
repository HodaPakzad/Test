<?php
require_once 'Person.php';
require_once 'ITransaction.php';
require_once 'Debat.php';
require_once 'Demand.php';


class Test
{
    public $manager1;
    public $manager2;

    public function __construct()
    {
        $this->manager1 = new Demand();
        $this->manager2 = new Debat();
    }

    public function test_demand(){
        $person = new Person();
        $person->setName('Ahmed');
        $person->setId(12);
        $person->setAmount(14.3);
        $this->manager1->setDemander($person);

        $person = new Person();
        $person->setName('Aya');
        $person->setId(32);
        $person->setAmount(64.9);
        $this->manager1->setDemander($person);


        $person = new Person();
        $person->setName('Anas');
        $person->setId(21);
        $person->setAmount(890.8);
        $this->manager1->setDemander($person);


        print_r($this->manager1->getDemander());
        echo '<br/>';

        echo $this->manager1->sum();


    }
    public function test_debat(){
        $person = new Person();
        $person->setName('Ahmed');
        $person->setId(12);
        $person->setAmount(14.3);
        $this->manager2-> setDebator($person);

        $person = new Person();
        $person->setName('Aya');
        $person->setId(32);
        $person->setAmount(64.9);
        $this->manager2->setDebator($person);


        $person = new Person();
        $person->setName('Anas');
        $person->setId(21);
        $person->setAmount(890.8);
        $this->manager2->setDebator($person);


        print_r($this->manager2->getDebator());
        echo '<br/>';

        echo $this->manager2->sum();


    }
    public function finance_status()
    {
        $test = new Test();
        $financeresult=$test->test_demand()->sum()-$test->test_debat->sum();
        echo $financeresult;
    }

}
$test= new Test();
$test->test_demand();


$test= new Test();
$test->test_debat();


$test= new Test();
$test->finance_status();
