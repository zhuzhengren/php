
欢迎<?php echo $_POST["fname"];?>!<br>
你的年龄是<?php echo $_POST["age"];?>

<?php
session_start();
$_SESSION["age"]=$_POST["age"];
echo $_SESSION['age'];