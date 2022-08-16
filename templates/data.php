<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>All Employees</h2>           
  <table class="table table-hover">
    <thead>
      <tr>
      <th>S.No</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Image</th>
        <th>Delete<th>
      </tr>
    </thead>
    <tbody>
      
    <?php
    $i=1;
    foreach($result as $row){ 
      $id =$row->id;
    ?>
    <tr>
        <td><?php echo $i++?></td>
        <td><?php echo $row->fname?></td>
        <td><?php echo $row->lname?></td>
        <td><?php echo $row->email?></td>
        <td><img src="<?php echo $row->img?>"></td>
        <form method="GET">
          <td><button class="btn btn-danger" name ="dlt"><a href="http://localhost/wordpress/wp-admin/options-general.php?page=employee-form?id=<?php echo $id?>"> Delete</a></button></td>
        </form>
    </tr>
    <?php } ?>
    
    </tbody>
  </table>
</div>

</body>
</html>
