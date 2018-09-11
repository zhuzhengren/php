<html>
    <script type="text/javascript" src="jquery.min.js"></script>
    <body>
        <form action = "welcome.php" method="post">
            名字：<input type="text" name ="fname">
            年龄：<input type="text" name ="age">
            <input type="submit" value="提交" >       
        </form>
        <input  type="button" value="test"  onclick="test()">
    </body>
    <script type="text/javascript">
        function test() {
           $.ajax({
                    type: "get",
                    url: "test2.php",
                    async: false,
                    success: function (data) {
                            alert(data);        
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        /*弹出jqXHR对象的信息*/
                        alert(" ajax error");
                        alert(jqXHR.responseText);
                    }
                })
        }
    </script>
</html>
