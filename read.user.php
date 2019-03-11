<?php

include_once('configPDO.php');


function readUser() {

  $id=$_POST['id'];

    $connec = new PDO("mysql:dbname=BLOG", 'root', '1234');

    $connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $request = $connec->prepare("SELECT * from users where id=$id");
  //  var_dump("INSERT INTO commentaire(date_creat,commentaire) VALUES ($date_creat','$commentaire')");
    $request->execute();
    
    $request->fetch(PDO::FETCH_ASSOC);
    $hmar = $request->fetch();

    echo $hmar;
}



?>