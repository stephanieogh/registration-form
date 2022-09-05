<?php 

    require('config/db.php');

    $userId = $_GET['id'];


    $deleteUserQuery = mysqli_query($connection, "DELETE FROM `user_tbl` WHERE id = '$userId'");

    if($deleteUserQuery){
        echo "<script>
            alert('Data Deleted');
            window.location.href = 'read.php';
            </script>";
    }else{
        echo "Unable to delete user at this time, please try again.";
    }


?>