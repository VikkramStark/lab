<html>
    <head>

    </head>

    <body>

        <style>
            *{
                margin:0px; 
                padding:0px; 
                box-sizing:border-box;  
            }
        </style>
        <?php

            echo "<h3>This program is Done by me.</h3> <br>"; 
            $name = $_GET['name']; 
            $number = $_GET['number']; 
            $email = $_GET['email']; 
            
            $conn = new mysqli('localhost', 'root', '', 'lab');    
            // $conn = mysqli_connect('localhost', 'root', '', 'lab') ; 

            if($conn){
                echo "Database Connected Successfully";   
            }else{
                die("Connection Failed");
            }

            $sql = "Insert into Students(Name, Email, Phone) values('$name', '$email', '$number')"; 

            if($conn->query($sql)){
                echo "<br><br><h3>Records Inserted Successfully!<br></h3>"; 
                echo "<a href = 'index.html'>Go to Form</a><br>"; 
                echo "<a href = 'view.php'>View Database</a><br>";  
            }else{
                echo "<h2>Data Insertion Unsuccessful!</h2>";  
            }

            $conn->close(); 

        ?>
    </body>
</html>