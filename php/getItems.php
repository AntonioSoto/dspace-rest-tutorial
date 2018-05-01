<?php

  include 'dspaceFunctions.php';

  // Consultar items
  $jsessionID = getUserSessionID();
  loginToDspace();
  $ids = getItems($jsessionID);
  showAllItems($ids);

  function showAllItems($ids){

    $listOfItems = json_decode($ids,true);

    for($i=0; $i < count($listOfItems); $i++){

      var_dump($listOfItems[$i]);
      echo '<br/><br/>';
    }
  }

  echo "<p>Éxito</p>";

?>
