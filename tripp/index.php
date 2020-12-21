<?php

if(isset($_POST['name'])){

    //set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";


    //Create a database connection
    $con = mysqli_connect($server, $username, $password);
    
    // check for connection success
    if(!$con){
        die("connection to the database failed due to" . mysqli_connect_error());
    }
    //echo "success connecting to db";

    // collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `note` . `note` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    //echo $sql;
    
    // execute the query
    if($con->query($sql) == true){
        //echo "successfully inserted";
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="dp" src="dp.jpg" alt="DPCOE">
    <div class="container">
        <h1> Welcome To DPCOE</h1>
        <p> Enter your details and submit the form </p>
        

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="text" name="email" id="email" placeholder="enter your email">
            <input type="text" name="phone" id="phone" placeholder="enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any suggestions"></textarea>
            <button class="btn">submit</button>
            
         

        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>