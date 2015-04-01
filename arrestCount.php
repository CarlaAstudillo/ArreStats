<?php
  $dsn = "mysql:host=localhost;dbname=thewei_abp";
  //$dsn = "mysql:host=64.92.125.25;dbname=thewei_abp";
  $username = "thewei_abpmember";
  $password = "123.123.";
  //$query = 3;
  
  $pdo = new PDO($dsn, $username, $password);
  
  $rows = array();
  if(isset($_GET['query'])) {
  //if(isset($query)) {
      $stmt = $pdo->prepare("SELECT Arrest_Code, sum(Arrest_Counter) FROM ArrestTable WHERE Offense_Code = ? GROUP BY Arrest_Code");
      $stmt->execute(array($_GET['query']));
      //$stmt->execute(array($query));
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
  echo json_encode($rows);
?>