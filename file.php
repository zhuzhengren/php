<html>
    <body>
        <?php
        $file = fopen("ch1.php",'r+') or exit("file not exist");
        while(!feof($file)){
            echo fgetc($file);
        }
        fclose($file);
        ?>
    </body>
</html>