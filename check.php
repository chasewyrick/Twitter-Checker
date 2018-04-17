<?php
 $body  = "{$_GET['name']}";
?>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

	function check()
{
  var div = document.getElementById("textDiv");  
    div.textContent = "Twitter user '<?php echo $_GET['name']; ?>' does not exist or is suspended/deactivated. Re-checking in 5 seconds";  

    var text = div.textContent; 

    window.setInterval(function(){
    window.location.href = "check.php?name=<?php echo $_GET['name']; ?>";
}, 5000);

}</script>
<div id="textDiv"></div> 
<img src="http://php.eclipseemu.me/twitter/?id=<?php echo $_GET['name']; ?>" onerror="check(); this.style.display='none';"/>



