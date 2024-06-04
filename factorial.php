<html>
    <head>

    </head>

    <body>
        <?php
            echo "<h3>This program is Done by me.</h3> <br>"; 
            $num = 5;  
            
            function fact($num){
                if($num <= 1){
                    return 1; 
                }

                return $num*fact($num-1);  
            }

            $res = fact($num); 
            
            echo "Factorial of $num is $res";
        ?>
    </body>
</html>