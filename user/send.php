
<?php /*?><?php
if(isset($_POST["ok"]))
{
?>
	<script type="text/javascript">
		alert("Services Informed!!!");
		window.location="dashboard.php";
	</script>
	<?php

$client = new SocketLabsClient(exampleConfig::000001, "YOUR-API-KEY"); 
 
$message = new BasicMessage(); 

$message->subject = "Sending A Basic Message";
$message->htmlBody = "<html>This is the Html Body of my message.</html>";
$message->plainTextBody = "This is the Plain Text Body of my message.";

$message->from = new EmailAddress("from@example.com");
$message->replyTo = new EmailAddress("replyto@example.com");

//A basic message supports up to 50 recipients and supports several different ways to add recipients
$message->addToAddress("recipient1@example.com"); //Add a To address by passing the email address
$message->addCcAddress("recipient2@example.com", "Recipient #2"); //Add a CC address by passing the email address and a friendly name.
 
$response = $client->send($message);


}
		 
?>	<?php */?>	 

<?php

$to_email = "wagh.ajay2298@gmail.com";
$subject = "ALert to person";
$body = "Help to me!";
$headers = "From:missiontiger4628@gmail.com";


if ( mail($to_email, $subject, $body, $headers)) { ?>

    <script type="text/javascript">
		alert("Services Informed!!!");
		window.location="dashboard.php";
	</script>
<?php } else {?>
    <script>
        alert("email not deliver !");
    </script>
        <?php
}
?>