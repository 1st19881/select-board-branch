<?php
      $con= mysqli_connect("localhost","root","","student") or die("Error: " . mysqli_error($con));
      mysqli_query($con, "SET NAMES 'utf8' ");
      error_reporting( error_reporting() & ~E_NOTICE );
      date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>select by rapeepat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php
    $sql_board = "SELECT * FROM board";
    $query = mysqli_query($con, $sql_board);
?>

<div class="container p-5">
  <h1 class="text-center">แบบฟอมเลือกคณะและสาขา by rapeepat</h1>
  <p>code เลือกคณะ สาขา php + mysqli + ajax + jquery + bootstrap :</p>
  <form>
    <div class="form-group">
      <label for="sel1">คณะ:</label>
      <select class="form-control" name="board" id="board">
            <option value="" selected disabled>-กรุณาเลือกคณะ-</option>
             <?php foreach ($query as $value) { ?>
            <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
            <?php } ?>
      </select>
      <br>

      <label for="sel1">สาขา:</label>
      <select class="form-control" name="branch" id="branch">
      </select>
      <br>

        <a href=""> <button type="button" class="btn btn-primary btn-lg btn-block">บันทึก</button></a>
    </div>
  </form>
</div>
</body>
</html>
<?php include('script.php');?>