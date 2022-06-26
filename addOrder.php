<a href="Orders.php">Back to the form</a>

<?php
$connection = @mysqli_connect('127.0.0.1', 'root', '') or die("Could not connect");
mysqli_select_db($connection, "DB_Tourism");

$dateOrd = mysqli_real_escape_string($connection, $_POST['day']);
$paymentOrd = mysqli_real_escape_string($connection, $_POST['payment']);
$idTourOrd = $_POST["idTourOrd"];
$idTouristOrd = $_POST["idTouristOrd"];


$query_insert =
    "INSERT INTO Orders (dateOrd, idTouristOrd, idTourOrd, paymentOrd)
     VALUES ('" . $dateOrd . "', " . $idTouristOrd . ", " . $idTourOrd . ", '" . $paymentOrd . "')";
$result = mysqli_query($connection, $query_insert);

?>

<h4>Succsesfull!</h4>
