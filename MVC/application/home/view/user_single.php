<!DOCTYPE HTML>
<html>
    <head>
        <title>用户信息表</title>
    </head>
</html>
<body>
    <h2 align="center">用户信息表</h2>
    <table border="1" cellpadding="1" cellspacing="0" align="center" width="60%">
        <tr align="center">
            <th>字段</th>
            <th>值</th>
        </tr>
        <tr align="center">
            <th>id</th>
            <th><?php echo $data['id']?></th>
        </tr>
        <tr align="center">
            <th>name</th>
            <th><?php echo $data['name']?></th>
        </tr>
        <tr align="center">
            <th>email</th>
            <th><?php echo $data['email']?></th>
        </tr>
        <tr align="center">
            <th>role</th>
            <th><?php echo $data['role']?></th>
        </tr>
    </table>
    
    <p align="center">
        <?php 
        if($data['role']==1){
            echo "您是超级管理员";
        }else{
            echo "您是普通管理员";
        }
        ?>
    </p>
</body>
</html>
