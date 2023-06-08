<?php session_start();?>
<?php require_once("includes/connection.php");?>
<?php
	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
 {
while($row=mysql_fetch_assoc($query))
 {
	$dbusername=$row['username'];
  $dbpassword=$row['password'];
 }
  if($username == $dbusername && $password == $dbpassword)
 {

	 $_SESSION['session_username']=$username;	 

header("Location: intropage.php");
	}
	} else {

	
	echo  "<script>alert('Неправильное Имя пользователя или Пароль.');</script>";
}
	} else {
    echo "<script>alert('Все поля должны быть заполнены.');</script>";
	}
	}
?>
<?php include("includes/header.php"); ?>
<section>
    <div class="container Main2">
        <div id="login">
            <h1>Вход</h1>
            <form action="" id="loginform" method="post"name="loginform">
                <p><label for="user_login">Имя пользователя<br>
                    <input id="username" name="username"size="20" type="text" value=""></label></p>
                <p><label for="user_pass">Пароль<br>
                    <input id="password" name="password"size="20" type="password" value=""></label></p> 
                <p><input name="login"type= "submit" value="Log In"></p>
                <p>Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
            </form>
        </div>
    </div>
</section>
<?php include("includes/footer.php"); ?>