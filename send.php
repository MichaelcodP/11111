<?php require_once('config.php'); ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Send Email Notifications to subscribers - Techno Smarter </title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/letter.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="subscribe_scripts.js"></script>
</head>
<body>
	<div class="container">
 <div class="row">
     <div class="col-sm-3">
     </div>
       <div class="col-sm-6">
      <div class="form-container">
<h2 class="text-center">Send Email to Subscribers </h2>

<?php 
  if(isset($_POST['send']))
  {
    $title=trim($_POST['title']); 
    $content=trim($_POST['content']);
 $FromName='Travel'; // Your web title
$FromEmail='noreply@travel.com'; // your official web email
$ReplyTo='misha7103p@gmail.com';
$path='https://travel.com/demo/subscribe'; // set your path
 $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: ".$FromName." <".$FromEmail.">\n";
    $headers .= "Reply-To: ".$ReplyTo."\n";
    $headers .= "X-Sender: <".$FromEmail.">\n";
    $headers .= "X-Mailer: PHP\n"; 
    $headers .= "X-Priority: 1\n"; 
    $headers .= "Return-Path: <".$FromEmail.">\n";  
    //message start
     
    //message end 

   $sql="SELECT token,email FROM subscription WHERE is_verified=:status"; 
   $stmt = $db->prepare($sql);
   $status=1;
    $stmt->bindParam(':status', $status ,PDO::PARAM_STR);
            $stmt->execute();
$rows=$stmt->fetchAll();
foreach($rows as $row)
{
      $to=$row['email'];
      $token=$row['token'];
         $subject=$title.' ref '.rand(999,100);
    $msgs='<h1 style="text-align:center;">'.$FromName.'</h1> 
     <p style="font-size:16px;text-align:center;"><strong>'.$title.'</strong><br>'.$content.'
<br><br><br> 
<a target="_blank" href="'.$path.'/unsubscribe.php?token='.$token.'" ><small><u>Unsubscribe </small></u></a>
<br>
All rights are reserved || '.$FromName.'</p>';

if(@mail($to, $subject, $msgs, $headers,'-f'.$FromEmail))
      {
       $success=1;
      }
else 
    { 
echo 'The server failed to send the message. Please try again later.'; 
    }
}
       if(isset($success))
       {
           echo '<div class="msg">The email has been sent...<div>'; 
       }
  }
  ?>
        <form action="" method="POST">
          <div class="row">
            <div class="col-sm-12">
            <div class="form-group"><input type="text" name="title" class="form-control"  placeholder="Enter Title" required></div>
          </div>
          </div>
          <br> 
           <div class="row">
             <div class="col-sm-12">
            <div class="form-group">
              <textarea name="content" class="form-control" placeholder="Your content.." rows="7" required></textarea>
              <br>
            </div>
          </div>
    <button name="send" class="sub_btn btn btn-primary">Send </button>
    </form>
    </div>
</div>
     <div class="col-sm-3">
         
     </div>
	</div>
</body>
</html>