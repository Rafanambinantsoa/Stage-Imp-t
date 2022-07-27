<?php
$con = mysqli_connect('localhost', 'root', '', 'karim');

$query = "SELECT * FROM contribuables where cin = 123 ";
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
    $kim = $row['num_cin'];

    echo $kim;
}
