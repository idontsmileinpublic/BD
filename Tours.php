<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<title>Тури</title>
</head>
<body>
	<header>
		<div class="dws-menu">
			<ul class="dws-ul">
				<li class="dws-li" onclick="window.location.href='About.php'"><a href="#"><i class="fa fa-"aria-hidden="true"></i>About</a></li>  
				<li class="dws-li" onclick="window.location.href='Main.php'"><a href="#"><i class="fa fa-home"aria-hidden="true"></i>Головна</a></li>  
				<li class="dws-li" onclick="window.location.href='Orders.php'"><a href="#"><i class="fa fa-shopping-cart"aria-hidden="true"></i>Замовлення</a></li>  
				<li class="dws-li" onclick="window.location.href='Tours.php'"><a href="#"><i class="fa fa-glass"aria-hidden="true"></i>ТУРИ</a></li> 
				<li class="dws-li" onclick="window.location.href='Services.php'"><a href="#"><i class="fa fa-hotel"aria-hidden="true"></i>Послуги</a></li>  
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
    			$sql = "SELECT nameTour, totalPeopleTour, priceForTourTour FROM Tour";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					echo "<br> &#127757; Тур: " . $row["nameTour"]. "<br> &#128590;&#8205;&#9792;&#65039; Кількість людей: " . $row["totalPeopleTour"]. "<br> &#128182; Вартість: " . $row["priceForTourTour"]. "<br>";
				}
				echo "<br>";

				$conn->close();
				?>
		</header>
</body>