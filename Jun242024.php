<?php
$conn = mysqli_connect("localhost","root","","jun242024_db");
if($conn) {
    echo "database connected successfully!";
}
$select_sql = "SELECT * FROM `forms`";
$forms = mysqli_query($conn,$select_sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    <a class="btn btn-success" href="Jun212024.php">+ New Form</a>
  <h2>Hoverable Dark Table</h2>
  <p>The .table-hover class adds a hover effect (grey background color) on table rows:</p>            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Sr.no</th>
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Website</th>
        <th>Comments</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $srno = 1;
            while ($form = mysqli_fetch_assoc($forms)) {
        ?>
        <tr>
            <td><?php echo $srno;?></td>
            <td><?php echo $form['formid'];?></td>
            <td><?php echo $form['name'];?></td>
            <td><?php echo $form['gender'];?></td>
            <td><?php echo $form['email'];?></td>
            <td><?php echo $form['website'];?></td>
            <td><?php echo $form['comments'];?></td>            
        </tr>
        <?php
            $srno++;
        }?>
    </tbody>
  </table>
</div>

</body>
</html>
