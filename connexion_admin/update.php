<?php

$con = mysqli_connect('localhost', 'root', '', 'karim');
if (isset($_POST['kia'])) {
    $id = $_POST['kia'];

    $sql = "SELECT * FROM contribuables WHERE confirmer = 1 and nif = $id ";
    $result = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $response = $row;
    }
    echo json_encode($response);
} else {
    $response['status'] =200;
    $response['message'] = "Invalid  or Data";
}
