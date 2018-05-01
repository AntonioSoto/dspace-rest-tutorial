<?php

  include 'dspaceFunctions.php';

  $params["body"] = array();

  // Subir items
  $jsessionID = getUserSessionID();
  loginToDspace();
  postTheItem($jsessionID);

  function postTheItem( $jsessionID ){

    global $params;

    $params['body'] = array( 'metadata' => array() );

    addMetadata('dc.creator',$_REQUEST['dcCreator']);
    addMetadata('dc.title',$_REQUEST['dcTitle']);
    addMetadata('dc.date',$_REQUEST['dcDate']);

    $jsonItem = json_encode($params['body']);
    $collectionID = $_REQUEST['collectionID'];

    postItem($jsonItem, $collectionID, $jsessionID);
  }

  function addMetadata( $key, $data ){

    global $params;

    if( $data != "" ){

        $metadata = array( 'key' => $key, 'value' => $data );
        array_push($params['body']['metadata'], $metadata);
    }
  }

  echo "<p>Éxito</p>";

?>
