<?php

require 'Models/Person.php';

class PersonControler
{
    private $person;

    function __construct()
    {
        $this->person = new Person();
    }

    function invoke()
    {
        if (!isset($_GET['id'])) {
            $persons = $this->person->getPersonsList();
            include 'Views/persons_list.php';
        } else {
            $person = $this->person->getPerson($_GET['id']);
            include 'Views/person.php';
        }
        
    }
}