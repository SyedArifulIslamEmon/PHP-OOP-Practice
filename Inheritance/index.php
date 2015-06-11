<?php


      require"Bird.php";
      require"Pigeon.php";

      $pigeon=new Pigeon(true,4);

      echo $pigeon->getLegCount()."<br>";

      if($pigeon->canFly()){


          echo "Can Fly.........<br>";

      }



?>