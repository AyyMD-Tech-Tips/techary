<?php 
    function setComments($conn){
        if(isset($_POST['commentSubmit'])){
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $title = $_POST['title'];
            $post = $_POST['post'];

            $sql = "INSERT INTO `posts` (uid, date, title, post) VALUES ('$uid' , '$date' , '$title', '$post')";
            
            $result = $conn->query($sql);
            
        }
    }

    function getComments($conn){
        $sql = "SELECT * FROM `posts` ORDER BY `cid` ASC";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            echo "
                <div class='div commenty'>
                    <h5>".$row['uid']."</h5>
                    <h6>".$row['date']."</h6>
                    <h2>".nl2br($row['title'])."</h2>
                    <p>".nl2br($row['post'])."</p>
                    <div id='funcs'>
                        <div class='upvote fu'>
                            <p class='ups_count'>".$row['up']."</p>
                            <button style='margin-right: 10px' class='upvote ffff' type='button' id='".$row['cid']."'>Upvote</button>
                        </div>
                        <div class='downvote fu'>
                            <p class='downs_count'>".$row['down']."</p>
                            <button class='downvote ffff' type='button' id='".$row['cid']."'>Downvote</button>
                        </div>
                    </div>
                </div>
             ";
        }
    }