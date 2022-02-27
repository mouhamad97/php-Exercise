<?php 

$conn = mysqli_connect("localhost","root","","users");

if(!$conn){
    echo 'error in database';
} else {
    echo 'database is good';
}

if(isset($_POST['signupButton'])){

    $fullname= $_POST['fullname'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $date_of_birth= $_POST['date_of_birth'];
    $social= $_POST['social'];

    // $insertScript = "INSERT INTO `users` (`id`, `fullname`,`username`,`password`,`email`,`phone`,`date_of_birth`,`social_security_number`) VALUES (NULL, $fullname, $username, $password, $email, $phone,$date_of_birth,$social);";  
    
    // $insertScript = 'SELECT * from users';

    // echo $var =   mysqli_num_rows(mysqli_query($conn,$insertScript));

    $sql = "INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `email`, `phone`, `date_of_birth`, `social_security_number`) VALUES (NULL, \'\', \'\', \'\', \'\', \'\', \'\', \'\');";

    mysqli_query($conn,$sql);
   
}
// echo 'hello';
// $insertScript = "INSERT INTO `users` (`id`, `fullname`,`username`,`password`,`email`,`phone`,`date_of_birth`,`social_security_number`) VALUES (NULL, $fullname, $username, $password, $email, $phone,$date_of_birth,$social);"; 
// mysqli_query($conn,$insertScript);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="signupForm" method="post">

        <input name="fullname"  placeholder="Full name" type="text">
        <input name="username"  placeholder="username" type="text">
        <input name="password"  placeholder="password" type="text">
        <input name="passwordconfirm"  placeholder="confirm password" type="text">
        <input name="email"  placeholder="email" type="text">
        <input name="phone"  placeholder="phone" type="text">
        <input name="date_of_birth"  placeholder="date_of_birth" type="text">
        <input name="social"  placeholder="Social Security Number" type="text">

        <input type="submit" value="signup"name="signupButton"/>
   
    </form>
</body>
</html>