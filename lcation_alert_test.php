<html>
    <body>
        <form action = "welcome.php" method="post">
            名字：<input type="text" name ="fname">
            年龄：<input type="text" name ="age">
            <input type="submit" value="提交"onclick="test()" onsubmit="return false;" >
        </form>
         <input type="button" value="test"onclick="test()" >
    </body>
    <script type="text/javascript">
        function test() {
            alert("ss");
            window.location.href="https://www.baidu.com";
        }
    </script>
</html>
