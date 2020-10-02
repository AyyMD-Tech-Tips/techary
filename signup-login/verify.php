<?php 
include('server.php')
if(isset($_GET['vkey'])) {
    $vkey = $_GET['vkey'];
    
    $resultSet = $db->query("SELECT verified,vkey FROM accounts WHERE verified 0 AND vkey = '$vkey' LIMIT 1");
    if($resultSet->num_rows == 1){
        $update = $db->query("UPDATE accounts SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
        if($update){
            echo "Your account has been verified";
        }else{
            echo $db->error;
        }
    }else{
         echo "This account is invalid or alreadt verified";
    }
}else{
    die("Something went wrong");
}
?>
<html>
    <head>
    </head>
    
    <body>
    
    </body>
</html>