<?php
require_once 'Person.php';
abstract class Debat extends Person implements ITransaction
{
    private $debator ;

    public function getDebator(): array
    {
        return $this->debator;
    }

    public function setDebator(Person $person)
    {
        array_push($this->debator,$person);
    }

    public function sum()
    {
        $person = new Person();
        $debat=$person->getAmount();

    }


}