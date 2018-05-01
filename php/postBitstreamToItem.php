<?php

  include 'dspaceFunctions.php';

  // Subir archivo
  $jsessionID = getUserSessionID();
  loginToDspace();
  postTheFile($jsessionID);

  function postTheFile($jsessionID){

    postBitstreamToItem(
      $_REQUEST['itemID'],
      $_REQUEST['description'],
      $_REQUEST['filename'],
      $_REQUEST['filepath'],
      $jsessionID
    );
  }

  echo "<p>Éxito</p>";

?>
