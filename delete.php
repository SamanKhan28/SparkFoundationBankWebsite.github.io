<?php

include 'connection.php';

$_Id = $_GET['Id'];

$q = " DELETE FROM `customersinfo` WHERE Id = $_Id ";


$query = mysqli_query($con, $q);

header('location:CustomerInfo.php');

?>