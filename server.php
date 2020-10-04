<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', 'pass', 'techary');

// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $date = mysqli_real_escape_string($db, $_POST['date']);

    
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($username)) { array_push($errors, "Username is required"); }

    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if (empty($date)) { array_push($errors, "BirthDate is required"); }
    if (strlen($password_1) < 5){ array_push($errors, "The password must be more than 5 characters"); }
    if (strlen($username) > 20){ array_push($errors, "The Username must be less than 20 characters"); }
    if (strlen($username) < 5){ array_push($errors, "The Username must be more than 5 characters"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }
    
    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM accounts WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        
        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }
    
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = $db->prepare("INSERT INTO `accounts` (`username`, `email`, `password`, `birth_date`) VALUES (?, ?, ?, ?)");
        $query->bind_param("ssss", $username, $email, $password, $date);   
        //$query = "INSERT INTO `accounts` (`username`, `email`, `password`, `birth_date`) VALUES ('$username', '$email', '$password', '$date')";
        //if(!mysqli_query($db, $query)){
         //   echo "tUp";
        //}
        //printf("%d Row inserted.\n", mysqli_stmt_affected_rows($query));
        $query->execute();
        $query->close();
        //$friend_list = ""
    }

}
//login user
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM accounts WHERE username='$username' OR email='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            
            $update = "UPDATE `accounts` SET `status` = true WHERE `username`='$username'";
            //mysqli_query($db, $update);
            if (!mysqli_query($db, $update)) {
                echo "Error: " . mysqli_error($db);
            }
            //echo "proveri";
            header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

?>