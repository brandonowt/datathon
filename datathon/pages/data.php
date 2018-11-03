<?php

    $server = "localhost";
    $user = "root";
    $pass = "";
    $table = "datathon";

    $conn = mysqli_connect($server, $user, $pass, $table);

    $sql = "SELECT * FROM humans";
    $result = mysqli_query($conn, $sql);

    $value = array();

    while($row = mysqli_fetch_assoc($result)){
        $temp = array($row['year'],$row['first'],$row['second'],$row['third']);

        array_push($value, $temp);
    }

    echo json_encode($value);

?>