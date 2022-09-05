<div class="container" style="text-align:center">
<?php 
     require('config/db.php');

    if(isset($_POST['registerBtn'])){
        $firstName = ucfirst($_POST['firstName']);
        $lastName = $_POST['lastName'];
        $address =$_POST['address'];
        $password = md5($_POST['password']); //sha1, md5, salt are different hash functions used to hide passwords
        $email = $_POST['email'];
    // die($password); die is a function used to kill programs that follow immediately below the die function

        if(empty($firstName) || empty($lastName) || empty($password) || empty($email)  || empty($address)){
            echo "All fields are required";

        }else{
            $insertQuery = mysqli_query($connection, "INSERT INTO `user_tbl` 
            (id, first_name, last_name, password, email, address, created_at) 
            VALUES 
            ('', '$firstName', '$lastName', '$password', '$email', '$address', now())"
            );

            if($insertQuery){
                //echo "Account successfully created";
                header('location:welcome.php'); //header function is used to navigate to another webpage
            }else{
                echo mysqli_error($connection)."Oops! something went wrong";
            }

        }
    }


?>

<form action="index.php" method="POST">
    <h1 style="color:#ff6138">ACCOUNT REGISTRATION</h1>
    <br>
    <p>First Name: <input type="text" name="firstName"></p>
    <p>Last Name: <input type="text" name="lastName"></p>
    <p>Password: <input type="password" name="password"></p>
    <p>E-mail: <input type="email" name="email"></p>
    <p>Address: <input type="text" name="address"></p>
    <p><input type="submit" name="registerBtn" value="Register"></p>
</form>
</div>