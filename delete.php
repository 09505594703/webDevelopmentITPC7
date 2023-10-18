<?php
include_once("koniksyun/konik.php");

$con = connection();



if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM twoInput WHERE id = '$id'";
    $con->query($sql) or die ($con->error);
    echo header ("location: index.php");
}
?>