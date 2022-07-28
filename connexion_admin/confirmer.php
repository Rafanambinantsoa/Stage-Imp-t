<?php
$con = mysqli_connect('localhost', 'root', '', 'karim');

if (isset($_POST['akutagawa'])) {
    $query = "UPDATE `contribuables` SET `confirmer` = 1 WHERE `nif` = '".$_POST['akutagawa']."'";
    $result = mysqli_query($con, $query);
}
