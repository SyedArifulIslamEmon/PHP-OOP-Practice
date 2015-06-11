<?php

    require'Person.php';

    $person=new Person;

    $person->name="Sudip";
    $person->age=23;

    echo $person->get();


?>