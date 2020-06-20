<?php
if(isset($_POST['submit'])) {
$to = "mithilesh0joshi@gmail.com";
$subject = $_POST['subject'];
$email_field = $_POST['email'];
$message = $_POST['message'];
 
$body = "E-Mail: $email_field\n Message:\n $message";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>