<?php require_once("includes/connection.php"); ?>
<?php
    if(isset($_POST["zakaz"])){
	
	if(!empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['tovar'])) {
 $firstname=htmlspecialchars($_POST['firstname']);
 $email=htmlspecialchars($_POST['email']);
 $address=htmlspecialchars($_POST['address']);
 $tovar=htmlspecialchars($_POST['tovar']);
 $sql="INSERT INTO zakaz
  (full_name,email,address,tovar)
	VALUES('$firstname', '$email','$address','$tovar')";
  $result=mysql_query($sql);
 if($result){
echo "<script>alert('Заказ успешно создан.');</script>";
} else {
 echo "<script>alert('Ошибка Добавлениея заказа в БД.');</script>";
  }
	} else {
        echo "<script>alert('Все поля должны быть заполнены.');</script>";
	}
	}
	?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> <!-- -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Купить настольные игры. Доставка по СПБ">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap" rel="stylesheet"> <!--Подключаем шрифт с googlefonts -->
    <link rel="stylesheet" href="css/bootstrap.min.css"> <!--Подключаем bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><!--Подключаем  иконочный шрифт Font Awesome -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/css/tether-theme-arrows-dark.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
    <title>Купить настолные игры в интернет магазине "Let's Play"</title>
</head>
    <body>
        <section class="header_c">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <a href="main.html">
                            <img src="img/logo2.png" alt="Let's Play" class="logo">
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <a class="name" href="main.html">Let's Play</a>
                        </div>
                        <div>
                            Интернет-магазин Настольных Игр
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Аккаунт</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="intropage.php">Мой Аккаунт</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Выход</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<section>
<div class="container">
  <div class="row justify-content-center">
    <div class="Main3">
      <form action="zakaz.php" id="zakaz" method="post"name="zakaz">
        <div class="row">
          <div class="Magrin">
            <h3>Заказ</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Дмитрий В.С.">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="ул.example д.23">
            <label for="tov"><i class="	fa fa-cube"></i>Товар</label>
            <input type="text" id="tov" name="tovar" placeholder="Название товара">
          </div>
        </div>
        <input id="zakaz" name= "zakaz" type="submit" value="Сделать заказ" class="btn">
          <a href="main.html"><button type="button" class="btn">Вернуться</button></a>
      </form>
    </div>
  </div>
</div>
</section>
<?php include("includes/footer2.php"); ?>