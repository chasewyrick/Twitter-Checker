   <script type="text/javascript">
function changeText2(){
    var userInput = document.getElementById('userInput').value;
    var lnk = document.getElementById('lnk');
    lnk.href = "check.php?name=" + userInput ;
    lnk.innerHTML = lnk.href;
}
</script>

Check: <a href="" id=lnk></a> <br>
<input type='text' id='userInput' placeholder="Check" /><br></br>
<button onclick='changeText2()'/>Check this account</button>
<br></br>