<!DOCTYPE html>
<html>
<head>
	<title>Twitter Checker</title>
	<style>
	*{
		font-family: arial;
	}
</style>
</head>
<body>
<?php
 $body  = "{$_GET['name']}";
?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>



	function check()
{

    document.getElementById("check").innerHTML = "Twitter user <?php echo $_GET['name']; ?> does not exist or is suspended/deactivated.<br> Re-checking in 5 seconds <audio controls style='visibility: hidden; position: fixed;' autoplay><source src='oof.mp3' type='audio/ogg'></audio>";

    window.setInterval(function(){
    window.location.href = "check.php?name=<?php echo $_GET['name']; ?>";
}, 5000);
   

    var text = div.textContent; 

}



</script>
<center>
	
	<h1>Twitter Checker</h1>
	<div style='background-color: lightblue; padding: 16px 0px; border-radius: 10px;' id="check"></div>
</center>
<img style="visibility: hidden" onload="document.getElementById('check').innerHTML = 'User <?php echo $_GET['name']; ?> exists!';" src="pfp/?id=<?php echo $_GET['name']; ?>" onerror="check(); this.style.display='none';"/></div>




</body>
</html>