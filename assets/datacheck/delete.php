
<?php 
ini_set('display_errors', 1); error_reporting(E_ALL);
include "../backend/db.php" ?>

<?php
if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = $_GET['id'];
 $sql="DELETE FROM newsletter WHERE id = '$id'";
if ($mysqli->query($sql) === TRUE) {
    echo "Record deleted successfully";
    header("location:newsletter");
} else {
    echo "Error deleting record: " . $mysqli->error;
}
} 
?>