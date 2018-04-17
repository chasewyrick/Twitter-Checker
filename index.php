<!DOCTYPE html>
<html>
<head>
	<title>Twitter Checker</title>
	<style>
	*{font-family: arial;}
</style>
</head>
<body>
   <script type="text/javascript">
function changeText2(){
    var userInput = document.getElementById('userInput').value;
    var lnk = document.getElementById('lnk');
    lnk.href = "check.php?name=" + userInput ;
    lnk.innerHTML = lnk.href;
}
</script>
<center><h1>Twitter Checker</h1></center>
<center>Check: <a href="" id=lnk></a> <br>
<input type='text' id='userInput' placeholder="Check" /><br></br>
<button onclick='changeText2()'/>Check this account</button></center>

</body>
</html>