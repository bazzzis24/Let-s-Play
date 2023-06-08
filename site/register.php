<?php require_once("includes/connection.php"); ?>
<?php include("includes/header.php"); ?>
<?php
	
	if(isset($_POST["register"])){
	
	if(!empty($_POST['username']) && !empty($_POST['password'])) {
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
  $numrows=mysql_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO usertbl
  (username,password)
	VALUES('$username', '$password')";
  $result=mysql_query($sql);
 if($result){
	$message = "Аккаунт успешно создан.";
} else {
 $message = "Ошибка занесения аккаунта в БД!";
  }
	} else {
	$message = "Это имя пользователя уже занято! Попробуйте другое.";
   }
	} else {
	$message = "Все поля должны быть заполнены.";
	}
	}
	?>
	<?php if (!empty($message)) {echo "<script>alert('$message');</script>";} ?>
    <div class="container Main2">
        <div id="login">
    <h1>Регистрация</h1>
            <form action="register.php" id="registerform" method="post"name="registerform">
                <p><label for="user_pass">Имя пользователя<br>
                    <input id="username" name="username"size="20" type="text" value=""></label></p>
                <p><label for="user_pass">Пароль<br>
                    <input  id="password" name="password"size="32"   type="password" value=""></label></p>
                <p><input id="register" name= "register" type="submit" value="Зарегистрироваться"></p>
	   <p>Уже зарегистрированы? <a href= "index.php">Введите имя пользователя</a>!</p>
    </form>
        </div>
    </div>
<?php include("includes/footer.php"); ?>