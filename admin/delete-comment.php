<?php
include 'connection.php';

if(isset($_GET['Del']))
{
    $delid = $_GET['Del'];
    $query = "DELETE FROM comment WHERE commentID='$delid'";
    $run = mysqli_query($conn, $query);

    if($run)
    {
        header("location:view-comment.php");
        exit(); // Add this line to stop the script execution after redirecting
    }
    else
    {
        echo "<script>window.alert('Unable to Delete')</script>";
    }
}
