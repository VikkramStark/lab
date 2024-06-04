<html>
    <head>

    </head>

    <body>
        <?php
            echo "<h3>This program is Done by me.</h3> <br>"; 
            $str = "thakkali";  
            $rev = strrev($str); 
            if($str == $rev){
                echo "$str is Palindrome";  
            }else{
                echo "$str is not Palindrome"; 
            }
        ?>
    </body>
</html>