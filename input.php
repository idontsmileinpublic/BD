<a href="Contragents.php">Back to the form</a>
<br>
<br>
<?php
$connection = @mysqli_connect('127.0.0.1', 'root', '') or die("Could not connect");
mysqli_select_db($connection, "DB_Tourism");

$title = mysqli_real_escape_string($connection, $_POST["title"]);
$idCity = $_POST["idCity"];

if ($title == null)
    die("Title is incorrect!");

$query_insert =
    "INSERT INTO Contragent (nameContr, idCityContr)
     VALUES ('" . $title . "', " . $idCity . ")";
$result = mysqli_query($connection, $query_insert);

?>

<h4>Succsesfull!</h4>
