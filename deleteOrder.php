<a href="Orders.php">Back to the form</a>

<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'DB_Tourism';

        $conn = mysqli_connect($servername, $username, $password, $db);

        $idOrder = $_POST['title'];

        $query_insert = "DELETE FROM Orders WHERE idOrd = $idOrder";
        $result = mysqli_query($conn, $query_insert);

        $conn->close();
?>

<h4>Succsesfull!</h4>