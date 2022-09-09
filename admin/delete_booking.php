<?php
ob_start();
include("connection.php");
include("header.php");
?>

<?php


$id = $_GET['id']; // get id through query string
$sql = "DELETE FROM booking_patient WHERE id = '$id'";
$del = mysqli_query($connection,$sql); // delete query

if($del)
{
    mysqli_close($connection); // Close connection
    header("location:data.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>
<?php

include("footer.php");
ob_end_flush();

?>