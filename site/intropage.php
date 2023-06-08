<?php

session_start();

if(!isset($_SESSION["session_username"])):
header("location:login.php");
else:
?>
	
<?php include("includes/header.php"); ?>
<div class="container">
<div class="menu">
<h2>Добро пожаловать, <span><?php echo $_SESSION['session_username'];?>! </span></h2>
</div>
</div>
<div class="container Main d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-6">
   <a class="name" href="logout.php">Выйти из системы</a>
        </div>
        <div class="col-lg-6">
  <a class="name" href="main.html">Продолжить</a>
        </div>
    </div>
</div>
	
<?php include("includes/footer2.php"); ?>
	
<?php endif; ?>