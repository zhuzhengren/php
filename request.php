<html>
    <body>
        <form method="post" action ="<?php echo  $_SERVER['PHP_SELF'];?>" >
            Name: <input type="text" name ="fname">
            <input type="submit">
        </form>
        <?Php
        echo $_REQUEST['fname'];
        ?>
          
    </body>
</html>