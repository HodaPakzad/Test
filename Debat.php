<?php
require_once 'Person.php';
 class Debat extends Person implements ITransaction
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
        foreach($this->debator as $person)
        {
            $this->debatAmount+=$person->getAmount();
        }
        echo $this->debatAmount;

    }


}