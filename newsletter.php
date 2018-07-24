<?php

$methodType = $_SERVER['REQUEST_METHOD'];
$data = array("msg" => "$methodType", "error" => "");


if ($methodType === 'POST') {

  $servername = "localhost";
  $dblogin = "justince_farmtofable";
  $password = "Sample1234";
  $dbname = "justince_farmtotable";

  $REG_MESSAGE = $_POST["User_Message"];
  $REG_NAME =  $_POST["User_Name"];
  $REG_EMAIL =  $_POST["User_Email"];

  try {
    
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dblogin, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    $sql = "INSERT INTO `message` (message, name, email) VALUES (:REG_MESSAGE, :REG_NAME, :REG_EMAIL)";
    $statement = $conn->prepare($sql);
    $statement->execute(array(":REG_MESSAGE" => $REG_MESSAGE, ":REG_NAME" => $REG_NAME, ":REG_EMAIL" => $REG_EMAIL));
    $data["error"] = "no";
    $data["return"] = "Success!";

  } catch(PDOException $e) {
      $data["error"] = "yes";
      $data["return"] = "" . $sql . $e->getMessage() . $error;
  }

} else {

  $data["error"] = "yes";
  $data["return"] = "" . $sql . $e->getMessage() . $error;
}

echo json_encode($data, JSON_FORCE_OBJECT);

?>