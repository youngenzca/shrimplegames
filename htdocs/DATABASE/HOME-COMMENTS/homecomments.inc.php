<?php

function setComments() {
    if (isset($_POST['confirmComment'])) {
        if ($_POST['uid'] == '') {
            $uid = 'Anonymous';
        } else {
            $uid = $_POST['uid'];
        }
        $date = $_POST['date'];
        $message = $_POST['message'];

        $sql = "INSERT INTO homecomments (uid, date, message) 
        VALUES ('$uid', '$date', '$message')";

        $conn = mysqli_connect('localhost', 'root', '', 'HOME-COMMENTS');
        if (!$conn) {
            die("Connection failed: ".mysqli_connect_error());
        }

        $result = $conn->query($sql);
    }
}

function getComments() {
    $sql = "SELECT * FROM homecomments";

    $conn = mysqli_connect('localhost', 'root', '', 'HOME-COMMENTS');
    if (!$conn) {
        die("Connection failed: ".mysqli_connect_error());
    }

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        echo "<div class='allComments'>";
        echo "<div id='commentUID'>".$row['uid']."</div>";
            echo "<div id='commentDate'>".$row['date']."</div>";
            echo $row['message']."<br><hr>";
        echo "</div>";
    }
}