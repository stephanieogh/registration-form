<?php 
    require('config/db.php');

    $getUserQuery = mysqli_query($connection, "SELECT * FROM `user_tbl` ");

    //mysqli_num_rows function accepts one parameter and checks for records in tbl
    if(mysqli_num_rows($getUserQuery) < 1){
        echo "Record not found.";
    }else{
        echo'<table class="table table-light" border="2">
        <thead>
            <tr>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>';
        // mysqli_fetch_assoc function accepts only one parameter and fetches the records in the $getUserQuery as associative array
        while($row = mysqli_fetch_assoc($getUserQuery)){
            echo $row['first_name']."<br>";
            echo $row['email']."<br>";
            echo $row['address']. "<br>";

            echo '<p>'.$row['first_name'].'<a href  ="delete.php?id='.$row['id'].'"> Delete </a> </p>';
            
            echo '
                
                        <tr>
                            <td>'.$row['first_name'].'</td>
                            <td>'.$row['last_name'].'</td>
                            <td>'.$row['email'].'</td>
                            <td>'.$row['address'].'</td>
                        </tr>';
           

        } //while loop ends here


        echo'</tbody>
        </table>';

    }
?>