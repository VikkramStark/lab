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
            th,td, table{ 
                border:1px solid black;  
                border-collapse:collapse; 
            }

            th, td{
                padding:2px 4px; 
            }

            table{
                margin:10px; 
            }
        </style>
        <?php
            
            $conn = new mysqli('localhost', 'root', '', 'lab'); 

            if($conn){ 
                echo "Database Connected Successfully! <br>"; 
            }else{
                die("Database Connection Unsuccessful!!"); 
            }

            $sql = 'Select * from Students;'; 
            $res = $conn->query($sql);   

            if($res->num_rows > 0){ 

            ?> 

                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                    </tr>
                    <?php 

                        while($row = $res->fetch_assoc()){
                            ?>
                            <tr>
                                <td><?php echo $row['ID'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Phone'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                            </tr>
                        <?php } ?> 

                </table>

            <?php 
                } else{
                    echo "<br>No Data Found in Database<br>";  
                } 
            ?> 
        

        <?php 
            echo "<br><a href = 'index.html'>Go to Insert Data</a><br>";  
        ?>
    </body>
</html>