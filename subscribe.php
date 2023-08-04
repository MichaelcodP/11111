<?php require_once('config.php');
 $email = trim($_POST['email']);
 if(empty($email))
    { 
    echo "Email required";
    }
    else{  
        $sql="SELECT count(*) from subscription where email=:email";
     $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email ,PDO::PARAM_STR);
    $stmt->execute();
        $count_email = $stmt->fetchColumn(); 
        if($count_email>0) 
        {
            echo '<div class="msg">You have already subscribed..</div>';
        }
        else 
        {
   $token = bin2hex(random_bytes(50));
            $date = new DateTime(null, new DateTimezone('GMT+1'));
$created=$date->format('Y-m-d H:i:s');
      $sql="INSERT INTO subscription(email,token,created) VALUES(:email,:token,:created)";
       $stmt = $db->prepare($sql);
    $stmt->bindParam(':email', $email ,PDO::PARAM_STR);
    $stmt->bindParam(':token', $token,PDO::PARAM_STR);
       $stmt->bindParam(':created', $created,PDO::PARAM_STR);
   
        $to = $email;
    $subject = "Please confirm your email subscription";
 $FromName='Techno Smarter'; // Your web title
$FromEmail='noreply@technosmarter.com'; // your official web email
$ReplyTo='noreply@technosmarter.com';
$path='https://technosmarter.com/demo/subscribe'; // set your path
 $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\n";
    $headers .= "From: ".$FromName." <".$FromEmail.">\n";
    $headers .= "Reply-To: ".$ReplyTo."\n";
    $headers .= "X-Sender: <".$FromEmail.">\n";
    $headers .= "X-Mailer: PHP\n"; 
    $headers .= "X-Priority: 1\n"; 
    $headers .= "Return-Path: <".$FromEmail.">\n";  
    //message start
     $msgs='<h1 style="text-align:center;">'.$FromName.'</h1> 
     <p style="font-size:16px;text-align:center;">We have received an email confirmation request for subscription. <a href="'.$path.'/verification.php?token='.$token.'">Click Here </a> to confirm your email 
<br><br>
OR
<a target="_blank" href="'.$path.'/unsubscribe.php?token='.$token.'" ><small><u>Unsubscribe </small></u></a>
<br>
All rights are reserved || '.$FromName.'</p>';
    //message end 
       if(@mail($to, $subject, $msgs, $headers,'-f'.$FromEmail))
       {
        $stmt->execute();
     echo '<div class="msg">A verification link has been sent to your email address, please check your email and confirm.<div>'; 
       }
else 
    { 
echo 'The server failed to send the message. Please try again later.'; 
    }
        }
    }
?>