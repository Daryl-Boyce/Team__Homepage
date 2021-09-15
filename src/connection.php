<?php
    $servername = "localhost";
    $username = "admin";
    $password = "Password12";
    $dbname = "pair_project";

    try {
        $db = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
          // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
      echo $e->getMessage();
      throw new ErrorException;
    }
?>