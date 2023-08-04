<?php require_once('config.php'); ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Unsubscribe - Techno Smarter </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/letter.css" rel="stylesheet">
</head>
<body>
	<div class="container">
 <div class="row">
     <div class="col-sm-3">
     </div>
       <div class="col-sm-6">
      <div class="form-container">
        <?php if(!isset($_GET['token']))
          {
          echo 'Link missing or expired....';
          } 
          else 
          {
            $token=$_GET['token'];
            $sql="SELECT count(*) from subscription where token=:token";
     $stmt = $db->prepare($sql);
    $stmt->bindParam(':token', $token ,PDO::PARAM_STR);
    $stmt->execute();
        $count_token = $stmt->fetchColumn(); 
        if($count_token==0)
        {
       echo 'Link missing or expired....'; 
        }
        else 
        {
       $sql="SELECT count(*) from subscription where token=:token AND is_verified=:status ";
     $stmt = $db->prepare($sql);
       $status=0;
    $stmt->bindParam(':token', $token ,PDO::PARAM_STR);
        $stmt->bindParam(':status', $status ,PDO::PARAM_INT);
    $stmt->execute();
        $count_verification = $stmt->fetchColumn(); 
        if($count_verification>0)
        {
           echo 'You have already unsubscribed..'; 
        }
        else 
        {
                $sql="UPDATE subscription SET is_verified=:status where token=:token";
     $stmt = $db->prepare($sql);
     $status=0;
    $stmt->bindParam(':token', $token ,PDO::PARAM_STR);
    $stmt->bindParam(':status', $status ,PDO::PARAM_INT);
    $res=$stmt->execute();
    if($res)
    {
      echo '<span style="color:green">You have successfully unsubscribed.</span>'; 
    }
        }
        }
          }
        ?>

</div>
     <div class="col-sm-3">
      
     </div>
	</div>
</body>
</html>