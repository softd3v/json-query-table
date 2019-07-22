<!DOCTYPE html>
<html lang="en">
<head>
  <title>Truck Drivers Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>


<?php
$data = file_get_contents("truck_drivers_table.json");
$driver_table = json_decode($data, true);
?>


<div class="container">
  <h2>Truck Drivers Table</h2>
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">l
    <table class="table table-bordered">
    <thead>
      <tr>
        <th>Driver License</th>
        <th>Driver Name</th>
        <th>Company Name</th>
        <th>Remark</th>
      </tr>
    </thead>
    <tbody id="myTable">
    
    <?php foreach ($driver_table as $valores) { ?>
    
        <tr>
        <?php echo "<td>$valores[driver_license]</td>"?>
        <?php echo "<td>$valores[driver_name]</td>"?>
        <?php echo "<td>$valores[company_name]</td>"?>
        <?php echo "<td>$valores[remark]</td>"?>
      </tr>
      
      <?php } ?>

    </tbody>
  </table>
</div>

</body>
</html>

<!--JAVA***************************************************************-->
<script type="text/javascript" src="js/search_table.js"></script>
<!--*******************************************************************-->