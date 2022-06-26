<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<title>Контрагенти</title>
</head>
<body>
	<header>
		<div class="dws-menu">
			<ul class="dws-ul">
				<li class="dws-li" onclick="window.location.href='About.php'"><a href="#"><i class="fa fa-"aria-hidden="true"></i>About</a></li>  
				<li class="dws-li" onclick="window.location.href='Main.php'"><a href="#"><i class="fa fa-home"aria-hidden="true"></i>Головна</a></li>  
				<li class="dws-li" onclick="window.location.href='Orders.php'"><a href="#"><i class="fa fa-shopping-cart"aria-hidden="true"></i>Замовлення</a></li>  
				<li class="dws-li" onclick="window.location.href='Tours.php'"><a href="#"><i class="fa fa-glass"aria-hidden="true"></i>Тури</a></li> 
				<li class="dws-li" onclick="window.location.href='Services.php'"><a href="#"><i class="fa fa-hotel"aria-hidden="true"></i>Послуги</a></li>  
				<li class="dws-li" onclick="window.location.href='Customers.php'"><a href="#"><i class="fa fa-id-card-o"aria-hidden="true"></i>Клієнти</a></li>  
				<li class="dws-li" onclick="window.location.href='Contragents.php'"><a href="#"><i class="fa fa-male"aria-hidden="true"></i>КОНТРАГЕНТИ</a></li> 
				</ul>
			</div>

			<?php
				$servername = 'localhost';
				$username = 'root';
				$password = '';
				$db = 'DB_Tourism';

				$conn = mysqli_connect($servername, $username, $password, $db);

    			$sql = "SELECT contr.nameContr, cit.nameCity FROM `City` as cit JOIN `Contragent` as contr ON(cit.idCity = contr.idCityContr)";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					echo "<br> &#127750 Місто: " . $row["nameCity"]. "<br> &#127970 Назва контрагенту: " . $row["nameContr"]. "<br>";
				}
				echo "<br>";

				$conn->close();
				?>

<h2>Додати контрагента:</h2>
    <?php
        $connection = @mysqli_connect('127.0.0.1', 'root', '') or die("Could not connect");
        mysqli_select_db($connection, "DB_Tourism");

        $resultCity = mysqli_query($connection, "SELECT * FROM City");
        $arrayCity = mysqli_fetch_all($resultCity);
        $lengthCity = mysqli_num_rows($resultCity);


        echo   "<form action='input.php' method='post' name='form'>
                    <input class='input-form' name='title' type='text' placeholder='Уведіть назву контрагенту' />
                    <br>
                    <div class='label'>
                        <label for='idCity'>Оберіть місто:</label>
                        <select name='idCity'/>";
        for ($i = 0; $i < $lengthCity; $i++)
        {
             echo "<option value='" . $arrayCity[$i][0] . "'>" . $arrayCity[$i][1] . ' ' . $arrayCity[$i][2]
                   . "</option>";
        }
        echo   "</select>
                </div>
                <br>
                <input type='submit' value='Додати' />
            </form>";
    ?>

		</header>
</body>