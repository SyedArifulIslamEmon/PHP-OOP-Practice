<?php


   require "TalkInterface.php";

   require "Dog.php";
   require "Cat.php";

   $dog=new Dog();


   echo $dog->talk();

   $cat=new Cat();

   echo $cat->talk();






?>

