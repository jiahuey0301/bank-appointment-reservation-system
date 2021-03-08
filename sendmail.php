<!--//https://www.youtube.com/watch?v=UBF1vYoXIw0&ab_channel=JiansenLu-->
<!--//https://www.php.net/manual/en/function.mail.php-->
<!--//https://css-tricks.com/sending-nice-html-email-with-php/-->

<?php 
//cross the database to get the user email 
$query = "SELECT * FROM customers WHERE cus_id=$cus_id";
$pick_email = mysqli_query($connection,$query);

//find the row based on the user id
while ($row = mysqli_fetch_assoc($pick_email)) {
$cus_email = $row['cus_email'];

//to recipients--customer--receiver
$to = $cus_email;
}

//subject of email
$subject = 'Online Bank Appointment - Appointment details';

//header of email--sender 
$headers = "From: onlinebanking518@gmail.com";

// To send HTML mail, the Content-type header must be set
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$query1 = "SELECT * FROM appointment INNER JOIN services ON appointment.ser_id = services.ser_id where appointment.cus_id = $cus_id ORDER BY appointment.appointment_id DESC LIMIT 1";
$success_appointment = mysqli_query($connection,$query1);
while($row = mysqli_fetch_assoc($success_appointment)){

// content of email in table way
$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="20">';
    
$message .= "<tr ><td><strong>Appointment No:</strong> </td><td>" . strip_tags($row['appointment_id']) . "</td></tr>";
$message .= "<tr><td><strong>Customer Name:</strong> </td><td>" . strip_tags($row['cus_name']) . "</td></tr>";
$message .= "<tr><td><strong>Customer Email:</strong> </td><td>" . strip_tags($row['cus_email']) . "</td></tr>";
$message .= "<tr><td><strong>Customer Phone.no:</strong> </td><td>" . strip_tags($row['cus_phoneno']) . "</td></tr>";
$message .= "<tr><td><strong>Service Selected:</strong> </td><td>" . strip_tags($row['ser_name']) . "</td></tr>";
$message .= "<tr><td><strong>Appointment Date: </strong> </td><td>" . strip_tags($row['date']) . "</td></tr>";
$message .= "<tr><td><strong>Appointment Time: </strong> </td><td>" . strip_tags($row['time_list']) . "</td></tr>";


$message .= "</table>";
$message .= "</body></html>";

// send the email
if (mail($to, $subject, $message, $headers) ){
    //if successfully
  echo 'Your appointment information already sent to your email.Please kindly check into it.';
} else {
    //if something wrong
   echo 'Something wrong when sending the email. Sorry for inconvenience caused!';
}
}
?>