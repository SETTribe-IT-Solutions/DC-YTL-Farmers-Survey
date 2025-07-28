<?php

include('../include/conn.php');

$taluka = $_GET['taluka'];
$sql = "SELECT village FROM master WHERE taluka = '$taluka'";
$query = mysqli_query($con, $sql);
while ($result = mysqli_fetch_assoc($query)) {
    ?>
    <option value="<?= $result['village'] ?>"><?= $result['village'] ?></option>
    <?php
}
?>