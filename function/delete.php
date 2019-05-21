<?php 

session_start();

include 'verif_co.php';
include 'co.php';
$current_id=$_GET['id'];
$sql="DELETE FROM films WHERE id=$current_id";
$conn->query($sql);
if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success'>Record deleted successfully</div>";
    
} else {
    echo "Error deleting record: " . $conn->error;
}

header('location:../admin/index.php')

?>