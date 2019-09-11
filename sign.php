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
  $password= $_POST['password'];
  $address= $_POST['address'];


	$query = "insert into admin(Name,Email,Password,Address) values('$name', '$email','$password','$address')";

	$run = mysqli_query($conn,$query);
	if($run == true)
       {
       	?>
       	<script>
       		alert('Signup successfully:');
          window.open('index.html','_self'); 

       
       	</script>
       	<?php
       }
}



?>
