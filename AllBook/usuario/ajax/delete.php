<?php
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
include("../../conexion/bd.php");

    // get user id
    $id = $_POST['id'];

    // delete User
    $query = "DELETE FROM usuario WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}
?>