<?php

  include 'dspaceFunctions.php';

  // Eliminar items
  $jsessionID = getUserSessionID();
  loginToDspace();
  $ids = getItems($jsessionID);
  deleteItems($ids, $jsessionID);

  function deleteItems($ids, $jsessionID){

      set_time_limit(0);

      $listOfItems = json_decode($ids,true);

      for($i=0; $i < count($listOfItems); $i++){

          deleteItem( $listOfItems[$i]['uuid'], $jsessionID );
      }
  }

  echo "<p>Éxito</p>";
?>
