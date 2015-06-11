<?php


   require"Bird.php";
   require"Pigeon.php";

   $pigeon=new Pigeon(true,2);


   $pigeon->foo();



   if($pigeon->canFly()){       // Call to protected method Bird::canFly() from context 

      echo "Can Fly....";

   }

   echo $pigeon->legCount;

?>