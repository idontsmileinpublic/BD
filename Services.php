<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<title>Послуги</title>
</head>
<body>
	<header>
		<div class="dws-menu">
			<ul class="dws-ul">
				<li class="dws-li" onclick="window.location.href='About.php'"><a href="#"><i class="fa fa-"aria-hidden="true"></i>About</a></li>  
				<li class="dws-li" onclick="window.location.href='Main.php'"><a href="#"><i class="fa fa-home"aria-hidden="true"></i>Головна</a></li>  
				<li class="dws-li" onclick="window.location.href='Orders.php'"><a href="#"><i class="fa fa-shopping-cart"aria-hidden="true"></i>Замовлення</a></li>  
				<li class="dws-li" onclick="window.location.href='Tours.php'"><a href="#"><i class="fa fa-glass"aria-hidden="true"></i>Тури</a></li> 
				<li class="dws-li" onclick="window.location.href='Services.php'"><a href="#"><i class="fa fa-hotel"aria-hidden="true"></i>ПОСЛУГИ</a></li>  
				<li class="dws-li" onclick="window.location.href='Customers.php'"><a href="#"><i class="fa fa-id-card-o"aria-hidden="true"></i>Клієнти</a></li>  
				<li class="dws-li" onclick="window.location.href='Contragents.php'"><a href="#"><i class="fa fa-male"aria-hidden="true"></i>Контрагенти</a></li> 
				</ul>
			</div>

			<?php
				$servername = 'localhost';
				$username = 'root';
				$password = '';
				$db = 'DB_Tourism';

				$conn = mysqli_connect($servername, $username, $password, $db);
    			$sql = "SELECT s.priceServ, s.typeServ, contr.nameContr, t.nameTour, c.nameCity FROM 
				Service as s JOIN Tour as t ON s.idTourServ = t.idTour
				JOIN City as c ON s.idCityServ = c.idCity
				JOIN Contragent as contr ON contr.idCityContr = c.idCity";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					echo "<br> &#128670; Назва туру: " . $row["nameTour"]. "<br> &#128104;&#8205;&#128187; Контрагент : " . $row["nameContr"]. "<br> &#128718; Тип послуги: " . $row["typeServ"]."<br> &#127961;  Місто: " . $row["nameCity"]. "<br>  &#128182; Оплата: " . $row["priceServ"]."<br>";
				}
				echo "<br>";

				$conn->close();
				?>
		</header>
</body>