<a href="Orders.php">Back to the form</a>

<?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $db = 'DB_Tourism';

        $conn = mysqli_connect($servername, $username, $password, $db);

        $idOrder = $_POST['title'];
        $paymentSum = $_POST['title2'];

        $query_insert = "UPDATE Orders SET paymentOrd = $paymentSum WHERE idOrd = $idOrder";
        $result = mysqli_query($conn, $query_insert);

        $conn->close();
?>

<h4>Succsesfull!</h4>