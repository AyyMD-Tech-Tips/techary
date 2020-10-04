<?php 
    function setComments($conn, $d){
        if(isset($_POST['commentSubmit'])){
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $title = $_POST['title'];
            $post = $_POST['post'];

            $sql = "INSERT INTO $d (uid, date, title, post, up, down) VALUES ('$uid' , '$date' , '$title' '$post')";
            
            $result = $conn->query($sql);
        }
    }

    function getComments($conn, $d){
        $sql = "SELECT * FROM $d ORDER BY `cid` ASC";
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
                            <p>".$row['up']."</p>
                            <button style='margin-right: 10px' class='ffff' type='button' name='upvote' id='upvote'>Upvote</button>
                        </div>
                        <div class='downvote fu'>
                            <p>".$row['down']."</p>
                            <button class='ffff' type='button' name='downvote' id='downvote'>Downvote</button>
                        </div>
                    </div>
                </div>
             ";
        }
    }