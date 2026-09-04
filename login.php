    <?php

    include 'connect.php';

    session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM users where u_email = '$email' OR u_name = '$email' AND u_pass = '$pass'";
    $output = mysqli_query($try,$query);
    if(mysqli_num_rows($output)>0){
        echo "Login Sucessfully";
        $_SESSION['username'] = $email;
        header('Location:dashboard.php');   
    }else{
        echo "somthing Wrong";
    }
    ?>