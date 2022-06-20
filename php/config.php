<?php
    $conn = mysqli_connect("localhost", "root", "", "chatapp");
    if (!$conn) {
        echo "Detabase connected" . mysqli_connect_error();
    }

?>