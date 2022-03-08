<?php
require_once 'Person.php';
 class Demand extends Person implements ITransaction

{
    private $demander=[];
    private $demandAmount;


    public function getDemander(): array
    {
        return $this->demander;
    }

    public function setDemander(Person $person)
    {
        array_push($this->demander,$person);
    }


    public function sum()
    {
        $person = new Person();
        foreach($this->demander as $person)
        {
            $this->demandAmount+=$person->getAmount();
        }
        echo $this->demandAmount;

    }

}