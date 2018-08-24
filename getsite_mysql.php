<?php
$hostname = "123.207.140.186";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($hostname, $username, $password, $dbname);
if($conn->connect_errno){
    echo "sql connect error";
}

$id =$_GET["q"];
$sql = "SELECT url FROM websites WHERE id = $id";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array( $result)){
    echo $row["url"];
}


?>