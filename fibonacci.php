<html>
    <head>

    </head>

    <body>
        <?php
            echo "<h3>This program is Done by me.</h3> <br>"; 
            $a = 0; 
            $b = 1; 
            $n = 10; 
            echo "$a<br>"; 
            echo "$b<br>"; 
            for($x = 2; $x<=$n; $x++){
                $c = $a + $b; 
                echo "$c <br>"; 
                $a = $b;  
                $b = $c;  
            }
        ?>
    </body>
</html>