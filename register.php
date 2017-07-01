
<?php
    require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])&&isset($_POST['email'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(isset($_POST) & !empty($_POST)){


        	$sql = "SELECT * FROM `login` WHERE email='$email'";
        	$result = mysqli_query($connection,$sql );
        	$count = mysqli_num_rows($result);
        	if($count == 1){
            $message = "Email aready exists";
            echo "<script>if(confirm('User Slready exists')){
   window.location = 'index.php';
}else {}</script>";
            //header("Location: index.html");
        	}

          else{
            $query = "INSERT INTO `login` (username, password, email) VALUES ('$username', '$password', '$email')";
            $result = mysqli_query($connection,$query);
            if($result){

                echo "<script>if(confirm('User Successfully Signed Up!!!!!!')){
       window.location = 'index.php';
    }else {}</script>";


                exit();
            }else{
                $fmsg ="User Registration Failed";
            }
        	}

        }

    }
    ?>
