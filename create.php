<?php


ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";
$id = NULL;
$bodemformaat = $_POST["bodemformaat"];
$saus = $_POST["saus"];
$pizzatoppings = $_POST["pizzatoppings"];
$kruiden = $_POST["kruiden"];

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("INSERT INTO pizza (id, bodemformaat, saus, pizzatoppings, kruiden)
    VALUES (:id, :bodemformaat, :saus, :pizzatoppings, :kruiden)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':bodemformaat', $bodemformaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':pizzatoppings', $pizzatoppings);
    $stmt->bindParam(':kruiden', $kruiden);



    $stmt->execute();

    echo "Succes";
    header("Refresh:3 ./read.php");

}catch(PDOException $e) {
    echo $e->getMessage();
   // header("Location: ./index.php");
}
$conn = null;
?>