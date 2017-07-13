
<div class="panel panel-danger">
<div class="panel-heading">
 <h3 class="panel-title">Drives</h3></div>

  <div class="panel-body">
  <div class="list-group">
<?php
  include "assets/backend/db.php";
  $sql = "SELECT * from drive";
  $result = $mysqli->query($sql);  
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  $_SESSION['drive_name']=$row["drive_name"];
  $_SESSION['drive_id']=$row["drive_id"];
  $_SESSION['drive_date']=$row["drive_date"];
  $_SESSION['drive_time']=$row["drive_time"];


  ?> 
<button type="button" class="list-group-item"><?php echo $row["drive_name"]; ?></button>

  	
  <?php
    }
  ?>
    <?php
    } else {
      echo "0 results";
    }
    $mysqli->close();
?>	
		</div>
  </div>
</div>