<?php
$server = "localhost";
$username = "id8804393_harsh";
$password= "harsh";
$database = "id8804393_login";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
	die("connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
	
	$name= $_POST['name'];
  $email= $_POST['email'];
  $subject= $_POST['subject'];
  $message1= $_POST['message1'];


	$query = "insert into admin3(Name,Email,Subject,Message) values('$name', '$email','$subject','$message1')";

	$run = mysqli_query($conn,$query);
	if($run == true)
       {
       	?>
       	<script>
       		alert('Message sent successfully:');
          window.open('index.html','_self'); 

       
       	</script>
       	<?php
       }
}



?>
