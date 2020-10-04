<?php 
    function getNum($ur , $n){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $ur,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        //Split the output into an array that we can loop through line by line
        $array = preg_split('/\n/',$response);
        //For each line in the output

        curl_close($curl);


        $int = (int) filter_var($array[$n], FILTER_SANITIZE_NUMBER_INT);
        echo $int = number_format($int, 0, '. ', ' ');
    }


    function setComments($conn, $d){
        if(isset($_POST['commentSubmit'])){
            $uid = $_POST['uid'];
            $date = $_POST['date'];
            $message = $_POST['message'];
            $upvote = $_POST['upvote'];

            $sql = "INSERT INTO $d (uid, date, message, upvote) VALUES ('$uid' , '$date' , '$message', '$upvote')";
            
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
                    <p>".nl2br($row['message'])."</p>
                    <div id='funcs'>
                        <div class='upvote fu'>
                            <p>".$row['upvote']."</p>
                            <button style='margin-right: 10px' class='ffff' type='button' name='upvote' id='upvote'>Upvote</button>
                        </div>
                        <div class='downvote fu'>
                            <p>".$row['downvote']."</p>
                            <button class='ffff' type='button' name='downvote' id='downvote'>Downvote</button>
                        </div>
                    </div>
                </div>
             ";
        }
    }