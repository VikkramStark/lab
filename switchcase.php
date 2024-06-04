<html>
    <head>

    </head>

    <body>
        <?php
            echo "<h2>This Program is Done by me.</h2><br>"; 
            $a = 10; 
            $b = 20; 
            $choice = '*'; 
            
            switch($choice){
                case '+':
                    $c = $a + $b; 
                    echo "The sum of ($a + $b) is $c"; 
                    break; 
                case '-':
                    $c = $a - $b; 
                    echo "The difference of ($a - $b) is $c"; 
                    break; 
                case '*':
                    $c = $a * $b; 
                    echo "Product of ($a*$b) is $c"; 
                    break;  
            }
        ?>
    </body>
</html>