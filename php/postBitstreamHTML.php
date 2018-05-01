<?php

  include 'dspaceFunctions.php';

  // Subir archivo
  $jsessionID = getUserSessionID();
  loginToDspace();
  postTheHTMLFile($jsessionID);

  function postTheHTMLFile($jsessionID){

    postBitstreamHTML(
      $_REQUEST['itemID'],
      $_REQUEST['description'],
      $jsessionID
    );
  }

  echo "<p>Éxito</p>";

?>
