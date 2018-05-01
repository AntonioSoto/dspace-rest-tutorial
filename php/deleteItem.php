<?php

  include 'dspaceFunctions.php';

  // Eliminar item
  $jsessionID = getUserSessionID();
  loginToDspace();
  deleteTheItem($jsessionID);

  function deleteTheItem($jsessionID){

    deleteItem( $_REQUEST['itemID'], $jsessionID );
  }

  echo "<p>Éxito</p>";
?>
