<?php
require_once 'Person.php';
abstract class Debat extends Person implements ITransaction
{
    private $debator =[];
    private $debatAmount=0;//if we should initialized the variables?

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
        foreach($this->debater as $person)
        {
            $this->debatAmount+=$person->getAmount();
        }
        echo $this->debatAmount;

    }


}