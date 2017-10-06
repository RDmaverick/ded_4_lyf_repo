<?php

session_start();

include 'dbh.php';
?>
<html>
<head>
	<title>Home Page</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="general.js"></script>
   	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>
<body>
<?php

//echo "hii";
if(isset($_SESSION['id'])){
	$userId=$_SESSION['id'];
	?>
	
	<a href="schedule.php">Today's Schedule</a>
	<form class="sos_form" method="POST" action="">
		<input type="hidden" name="id" value="<?php echo $userId; ?>">
		<button type="submit" >CALL FOR HELP</button>
	</form>

	<p id="sos_error"></p>
	
	<?php
}
else
{
	if(!isset($_SESSION['id']))
	{
		header('Location: userprofile.php?id='.$_SESSION['id']);
	}
	else
	{
		//header('Location: index.php');
	}
}
?>
</body>
</html>