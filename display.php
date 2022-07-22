<!DOCTYPE html>
<html>
<head>
    <title>ADMISSION DETAILS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<style>
   tr:nth-child(even) {background-color: #f2f2f2;}
th{
      background-color: #4CAF50;
color: white;
}
</style>
<table class="table table-sm "><tr>
<th>Name </th>
<th>Road-point</th>
<th>Class</th>
<th>Madrassa</th>
<th>fathername</th>
<th>Address</th>
<th>Father's Job</th> 
<th>Tution Type</th>
<th>School</th>
<th>Madrassa</th>
<th>Vehicle</th>
<th>Mobile</th>
<th>Whatsapp</th>
    </tr>

<?php
                   include 'connection.php';

                     $sql = "SELECT * FROM `admission`";
                    if ($result=mysqli_query($conn,$sql))
                        {
                            while ($row=mysqli_fetch_row($result))
                                { ?>
                <tr>
                     <td><?php echo $row[0]; ?></td>
                    <td><?php echo $row[1]; ?></td>
                    <td><?php echo $row[2]; ?></td>
                    <td><?php echo $row[3]; ?></td>
                    <td><?php echo $row[4]; ?></td>
                    <td><?php echo $row[5]; ?></td>
                    <td><?php echo $row[6]; ?></td>
                    <td><?php echo $row[7]; ?></td>
                    <td><?php echo $row[8]; ?></td>
                    <td><?php echo $row[9]; ?></td>
                    <td><?php echo $row[10]; ?></td>
                    <td><a href="tel:'$row[11]'"><?php echo $row[11]; ?></a></td>
                     <td><a href="tel:'$row[11]'"><?php echo $row[12]; ?></a></td>
                  
                </tr>
                <?php }} ?>
    </table>


