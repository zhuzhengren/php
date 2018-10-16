<!DOCTYPE HTML>
<html>
    <head>
        <title>用户信息表</title>
    </head>
</html>
<body>
    <h2 align="center">用户信息表</h2>
    <table border="1" cellpadding="1" cellspacing="0" align="center" width="60%">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>邮箱</th>
            <th>角色</th>
        </tr>
        <?php foreach ($data as $user): ?>
            <tr align="center">
                <td><?php echo $user['id'] ?></td>
                <td><?php echo $user['name'] ?></td>
                <td><?php echo $user['email'] ?></td>
                <td><?php echo $user['role'] ?></td>
            </tr>

        <?php endforeach; ?>
    </table>
    <p>共计:<?php echo count($data) ?></p>
</body>
</html>
