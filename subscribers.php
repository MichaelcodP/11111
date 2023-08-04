<?php require_once('config.php'); ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Subscribers - Techno Smarter </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/letter.css" rel="stylesheet">
</head>
<body>
	<div class="container">
 <div class="row">
     <div class="col-sm-2">
     </div>
       <div class="col-sm-8">
      <div class="form-container">
        <h1>Subscribers </h1>
        <hr>
        <table class="table table-responsive">
            <th>Email</th>
            <th>Status</th>
            <th>Created</th>
    
        <?php 
    function status($val)
    {
   if($val==1)
   {
 return 'Confirmed'; 
   }
   else 
   {
    return '<span style="color:red;">Pending</span>'; 
   }
    }
            $sql="SELECT count(*) from subscription";
     $stmt = $db->prepare($sql);
    $stmt->execute();
        $count = $stmt->fetchColumn(); 
 if($count==0)
 {
    echo '<tr><td colspan="8">No data available..</td></tr>'; 
 }
 else{
   $sql="SELECT * FROM subscription ORDER BY id DESC"; 
          $stmt=$db->prepare($sql);
            $stmt->execute();
$rows=$stmt->fetchAll();
foreach($rows as $row)
{
    echo '<tr>
    <td>'.$row['email'].'</td>
    <td>'.status($row['is_verified']).'</td>
      <td>'.$row['created'].'</td>
    </tr> '; 
}
}
        ?> 
            </table>

</div>
     <div class="col-sm-2">
      
     </div>
	</div>
</body>
</html>