<?php
$servername = "123.207.140.186";
$username = "root";
$password = "";
$dbname ="myDB";

$conn = new  mysqli($servername, $username ,$password, $dbname);
if($conn->connect_errno){
    echo "sql connect error";
}
/*
$firstname = $_GET["firstname"];
$result = mysqli_query($conn, "SELECT * FROM MyGuests WHERE firstname=$firstname ORDER BY reg_date");
while($row = mysqli_fetch_array($result)){
    echo $row["email"]." reg_date ".$row["reg_date"]."<br>";
}
mysqli_close($conn);
*/
$id = $_GET["id"];

mysqli_query($conn, "DELETE FROM MyGuests  where id=$id");
echo "success";
mysqli_close($conn);
?>

