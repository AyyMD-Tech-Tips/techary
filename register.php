<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Techary</title>

    <link rel="icon" href="img/logo-w.png">
    <link rel="stylesheet" type="text/css" href="css/global.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body id="body">
<header class="hh" style="display: none;">
        <div class="hhi">
            <div class="div sqr">
                <img id='lg' src="img/logo-w.png">
            </div>
            <div class="container div">
                <div id="navy" class="nav" data-aos="zoom-in-up">
                    <div id="titl" style="text-shadow: unset;">
                        <svg class="svh" width="30px" height="30px" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        <h1 id="title">Home</h1>
                    </div>
                    <div id="hdr"></div>
                    <div class="navlink">
                        <a href="/" class="link">
                                <svg class="svh" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                            </svg>
                            <p class="atext">Home</p> 
                        </a>
                    </div>
                    <div class="navlink">
                        <a class="link" href="trending">
                            <img class="nvimg" src="img/trend-w.png" alt="">
                            <p class="atext">Trending</p>
                        </a>
                    </div>
                    <div class="navlink">
                        <a class="link" href="news">
                            <img src="img/ne-w.png" class="nvimg" alt="">
                            <p class="atext">News</p>
                        </a>
                    </div>
                    <div class="navlink">
                        <a class="link" href="cov-19">
                            <img src="img/cov-w.png" class="nvimg" alt="">
                            <p class="atext">Coronavirus</p>
                        </a>
                    </div>
                    <div class="navlink">
                        <a class="link" post="Logout" href="">
                            <img src="img/cov-w.png" class="nvimg" alt="">
                            <p class="atext">Log Out</p>
                        </a>
                    </div>
                </div>
            </div>
            <div id="dw_btn" class="div sqr">
                <img id="toggle" src="img/sun.png">
            </div>
        </div>
</header>
        
        <form method="post" action="login.php" class="div" style="padding-left: 10px;">
        <div><h2>Register</h2></div>
            <?php include('errors.php'); ?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?> "class="ff">
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="ff">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1" class="ff">
            </div>
            <div class="input-group">
                <label>Confirm password</label>
                <input type="password" name="password_2" class="ff">
            </div>
            <div class="input-group">
                <label>BirthDate</label>
                <input type="date" name="date" class="ff">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="reg_user" class="ff">Register</button>
            </div>
            <p>
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
        <script src="js/style.js"></script>
    </body>
</html>