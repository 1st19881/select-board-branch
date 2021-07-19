<?php

          $con= mysqli_connect("localhost","root","","student") or die("Error: " . mysqli_error($con));
          mysqli_query($con, "SET NAMES 'utf8' ");
          error_reporting( error_reporting() & ~E_NOTICE );
          date_default_timezone_set('Asia/Bangkok');  

          
  if (isset($_POST['function']) && $_POST['function'] == 'board') {
  	$id = $_POST['id'];
  	$sql = "SELECT * FROM branch WHERE board_id='$id'";
  	$query = mysqli_query($con, $sql);
  	echo '<option value="" selected disabled>-กรุณาเลือกสาขา-</option>';
  	foreach ($query as $value) {
  		echo '<option value="'.$value['id'].'">'.$value['name_th'].'</option>';
  		
  	}
  }

?>