<?php
$con = mysqli_connect('localhost', 'root', '', 'karim');

if (isset($_POST['deletenif'])) {
    $query = "DELETE FROM contribuables where nif = '".$_POST['deletenif']."'";
    $result = mysqli_query($con, $query);
}
