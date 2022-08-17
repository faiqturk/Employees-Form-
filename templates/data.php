<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<div class="container">
  <h2>All Employees</h2>           
  <table class="wp-list-table widefat fixed striped table-view-list posts">
    <thead>
      <tr>
        <th>S.No</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Image</th>
        <th>Actions<th>
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
        <td id="get-<?php echo $id?>-1"><?php echo $row->fname?></td>
        <td id="get-<?php echo $id?>-2"><?php echo $row->lname?></td>
        <td id="get-<?php echo $id?>-3"><?php echo $row->email?></td>
        <td id="get-<?php echo $id?>-4"><img src="<?php echo $row->img?>"></td>
        <form method="GET">
          <td>
            <a href="http://localhost/wordpress/wp-admin/options-general.php?page=employee-form&dlt=<?php echo $id?>" style="text-decoration: none;color: #b32d2e;"> Delete </a>
        </form>|
          <a href="http://localhost/wordpress/wp-admin/options-general.php?page=employee-form&upd" id ="abc" style="text-decoration: none;"> Update</button>|
          <a href="hgjhg" style="text-decoration: none;"> PDF</a>  
          </td>
    </tr>
    <?php } ?>
    
    </tbody>
  </table>
</div>

</body>
</html>
