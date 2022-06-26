<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css">
	<title>Замовлення</title>
</head>
<body>
	<header>
		<div class="dws-menu">
			<ul class="dws-ul">
				<li class="dws-li" onclick="window.location.href='About.php'"><a href="#"><i class="fa fa-"aria-hidden="true"></i>About</a></li>  
				<li class="dws-li" onclick="window.location.href='Main.php'"><a href="#"><i class="fa fa-home"aria-hidden="true"></i>Головна</a></li>  
				<li class="dws-li" onclick="window.location.href='Orders.php'"><a href="#"><i class="fa fa-shopping-cart"aria-hidden="true"></i>ЗАМОВЛЕННЯ</a></li>  
				<li class="dws-li" onclick="window.location.href='Tours.php'"><a href="#"><i class="fa fa-glass"aria-hidden="true"></i>Тури</a></li> 
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
    			$sql = "SELECT ord.idOrd, cx.nameCx, cx.countryCx, t.nameTour, ord.paymentOrd FROM `Tourist` as cx JOIN `Orders` as ord JOIN `Tour` as t ON(ord.idTourOrd = t.idTour) WHERE ord.idTouristOrd = cx.idCx";
				$result = $conn->query($sql);
				while($row = $result->fetch_assoc()) {
					echo "<br> &#128204; Код " . $row["idOrd"]. "<br> &#128589;&#8205;&#9794;&#65039; Клієнт: " . $row["nameCx"]. "<br> &#127757; Країна: " . $row["countryCx"]."<br> &#127957; Тур: " . $row["nameTour"]. "<br> &#128181; Оплата: " . $row["paymentOrd"]."<br>";
				}
				echo "<br>";

				$conn->close();
				?>

			<h2>Видалити замовлення:</h2>


<form action="deleteOrder.php" method='post' name='form'>
                    <input class='input' name='title' type='text' placeholder='Уведіть код'>
                    <br>
                    <input type='submit' value='Видалити'>
</form>

<h2>Додати замовлення:</h2>
    
<?php

                $connection = @mysqli_connect('127.0.0.1', 'root', '') or die("Could not connect");
                mysqli_select_db($connection, "DB_Tourism");

                $resultTour = mysqli_query($connection, "SELECT * FROM Tour");
                $arrayTour = mysqli_fetch_all($resultTour);
                $lengthTour = mysqli_num_rows($resultTour);

				$resultTourist = mysqli_query($connection, "SELECT * FROM Tourist");
                $arrayTourist = mysqli_fetch_all($resultTourist);
                $lengthTourist = mysqli_num_rows($resultTourist);

                echo "<form action='addOrder.php' method='post' name='form'>
						<input class='input' name='day' type='text' placeholder='Уведіть дату'>
                    <br>
					<input class='input' name='payment' type='text' placeholder='Уведіть оплату'>
                    <br>
                    <div class='label'>
                    <label for='idTourOrd'> Оберіть тур:    </label>
                    <select name='idTourOrd'/>";
                    for ($i = 0; $i < $lengthTour; $i++) {
                        echo "<option value='" . $arrayTour[$i][0] . "'>" . $arrayTour[$i][1] . ' ' . $arrayTour[$i][2] . "</option>";
                    }
                echo "</select>
                </div>

				<div class='label'>
                    <label for='idTouristOrd'> Оберіть клієнта:    </label>
                    <select name='idTouristOrd'/>";
                    for ($i = 0; $i < $lengthTourist; $i++) {
                        echo "<option value='" . $arrayTourist[$i][0] . "'>" . $arrayTourist[$i][1] . ' ' . $arrayTourist[$i][2] . "</option>";
                    }
                echo "</select>
                </div>
            
            
                <br>
                <input type = 'submit' value = 'Додати'/>
                </form>"
                ?>
<h2>Змінити оплату замовлення:</h2>

<form action="changePayment.php" method='post' name='form'>
                    <input class='input' name='title' type='text' placeholder='Уведіть код замовлення'>
                    <br>
					<input class='input' name='title2' type='text' placeholder='Уведіть суму оплати'>
                    <br>
                    <input type='submit' value='Змінити оплату'>
</form>

		
		</header>
</body>