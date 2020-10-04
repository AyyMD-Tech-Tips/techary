<?php
    date_default_timezone_set('Europe/Sofia');
    include 'php/conn.inc.php';
    include 'php/fun.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Techary</title>

    <link rel="icon" href="img/logo-w.png">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/main.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body id="body">
    <header class="hh" data-aos="zoom-in-up">
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
                </div>
            </div>
            <div id="dw_btn" class="div sqr">
                <img id="toggle" src="img/sun.png">
            </div>
        </div>
    </header>
    <div id="abc">
        <div id="content" class="content">
            <div id="combined">
                <div id="post" class="div">
                    <?php
                        echo"
                            <form class='post' style='margin-bottom: 10px' id='com'method='POST' action='".setComments($conn)."'>
                                <h1 style='margin: 0 0; margin-bottom: 5px'>Post:</h1>
                                <input type='hidden' name='uid' value=''>
                                <input class='ff' type='text' name='title' require placeholder='Title'>
                                <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                                <textarea class='ff' name='post' require placeholder='What is on your mind'></textarea>
                                <button class='ff' type='submit' name='commentSubmit' id='submit'>Comment</button>
                            </form>
                        ";
                    ?>
                </div>
                <div id="account_info" class="div">
                    <div id="profile_info">
                        <img id='profile_pic' name='profile_pic' src="https://via.placeholder.com/500x500.pngC/O" alt="">
                        <div>
                            <h1><span id="first_name" name='first_name'>first_name</span><br><span id="last_name" name='last_name'>last_name</span></h1>
                            <hr>
                            <h2 id="at" name='at'>@at_something</h2>
                            <h3 id="birthday" name='birthday'>01-01-1970</h3>
                        </div>
                    </div>
                    <hr style="margin: 25px;">
                    <div id="bio">
                        <h1>Bio:</h1>
                        <p></p>
                    </div>
                </div>
                <div id="search" class="div">
                     <h1>Search:</h1>   
                </div>
            </div>
            <div id="comment_section">
                <div id="comments">
                    <?php getComments($conn, 'posts'); ?> 
                </div>
            </div>
        </div>
    </div>
    <script src="js/mobile.js"></script>
    <script src="js/style.js"></script>
    <script src="js/updown.js"></script>
<?php
$con = mysqli_connect('localhost', 'root', '', 'techary');
var_dump($_POST);
if (isset($_POST['upvoted'])) {
    echo "rgr";
    $postid = $_POST['postid'];
    $result = mysqli_query($con, "SELECT `up` FROM `posts` WHERE cid=$postid");
    $row = mysqli_fetch_array($result);
    $n = $row['up'];
    
    mysqli_query($con, "INSERT INTO `upvoted` (userid, postid) VALUES (1, $postid)");
    mysqli_query($con, "UPDATE `posts` SET up=$n+1 WHERE cid=$postid");

    
    exit();
}
if (isset($_POST['downvoted'])) {
    $postid = $_POST['postid'];
    $result = mysqli_query($con, "SELECT `down` FROM `posts` WHERE cid=$postid");
    $row = mysqli_fetch_array($result);
    $n = $row['down'];

    mysqli_query($con, "INSERT INTO `downvoted` (userid, postid) VALUES (1, $postid)");
    mysqli_query($con, "UPDATE `posts` SET down=$n+1 WHERE cid=$postid");

    
    exit();
}


?>
</body>
</html>