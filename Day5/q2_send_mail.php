<html>
<head><b>Feedback</b></head>
<body>
<p>Please fill the feedback form as your feedback matters to us.</p>
<form action = "q2_send_mail.php" method="POST">
    Name <input type="text"  name="name" style="margin-left:25px;" required><br><br>
    Mail Id<input type="email"  name="mail" style="margin-left:19px;" required><br><br>
    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="submit">
 </form>
</body>
</html>
<?php
if(@$_POST["submit"])
{
 echo "Thanks for giving feedback.";   
 $name = @$_POST["name"];
 $mailto = @$_POST["mail"];
 $adminmail= "utkaarshb@gmail.com";
 $feedback = @$_POST["feedback"];
 $subject = "Feedback";
 $msg = "Hey $name thanks for filling feedback. Here is what we got from you: \n";
 $finalmsg = $msg . $feedback;
 $finalmsg = wordwrap($finalmsg, 70);
 $headers1 = "From: $mailto";

 $msg1 = "Here is what we got from $name ($mailto): \n";
 $finalmsg1 = $msg1 . $feedback;
 $finalmsg1 = wordwrap($finalmsg1,70); 
 $headers1 = "From: $mailto";
 mail($mailto,$subject,$finalmsg);
 mail($adminmail,$subject,$finalmsg1,$headers1);
}