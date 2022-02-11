<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";



try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, bodemformaat, saus, pizzatoppings, kruiden FROM pizza");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);

    $tableRows = "";
    foreach ($stmt->fetchALL() as $key=>$value) {
        $tableRows .= "<tr>
                        <td>$value->id</td>
                        <td>$value->bodemformaat</td>
                        <td>$value->saus</td>
                        <td>$value->pizzatoppings</td>
                        <td>$value->kruiden</td>
                        <td><a href='update.php?id=$value->id'><i class='bi bi-pencil-square'></i></></td>
                        <td><a href='delete.php?id=$value->id'><i class='bi bi-x-circle'></i></></td>
                        </tr>";
    }

}catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Maak je pizza</title>
  </head>
  <body class="container">
    <h1 class="text-center">Maak je eigen pizza</h1>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">bodemformaat</th>
      <th scope="col">saus</th>
      <th scope="col">pizzatoppings</th>
      <th scope="col">kruiden</th>
      <th scope="col">update</th>
      <th scope="col">delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php echo $tableRows;?>
  </tbody>
</table>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
