<?php

class Person
{
    public $id;
    public $name;
    public $age;

    function __construct($id = null, $name = null, $age = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
    }

    function getPersonsList()
    {
        return [
            new Person(1, 'Diep', 12),
            new Person(2, 'Trinh', 8),
            new Person(3, 'Tuan Linh', 18),
            new Person(5, 'Tam Linh', 3),
        ];
    }

    function getPerson($id)
    {
        $personsList = $this->getPersonsList();
        foreach ($personsList as $person) {
            if ($person->id == $id) {
                return $person;
            }
        }
    }
}