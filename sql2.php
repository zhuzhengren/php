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
 *预处理 
$stmt = $conn->prepare("INSERT INTO MyGuests(firstname,lastname,email) VALUES (?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "John";
$lastname = "Doe";
$email = "jonh@example.com";
$stmt->execute();

$firstname = "zhu";
$lastname = "zhengren";
$email = "zhuzr@yilan.tv";
$stmt->execute();

*/

/*
 * 查询
$sql = "select id, firstname,lastname,email from MyGuests";
$result = $conn->query($sql);
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "id: ".$row["id"]." fistname: ".$row["firstname"]." email ".$row["email"]."<br>";
    }
}
else{
        echo "没有结果";
    }
    
mysqli_close($conn);
 * 
 */


?>