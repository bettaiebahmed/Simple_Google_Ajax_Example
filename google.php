<html>
<head>
<script language="javascript">
function find()
{
word=document.getElementById("find").value;


if (window.XMLHttpRequest)    //  Objet standard
		{ 
			xhr = new XMLHttpRequest();     //  Firefox,
			
		} 
		else  if (window.ActiveXObject)      //  Internet
		{
			xhr = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xhr.onreadystatechange = function()
		{ 
	
		if ((xhr.readyState == 4 ) && (xhr.status == 200) )
			
			document.getElementById("results").innerHTML = xhr.responseText;
		
		};
		xhr.open('GET', 'resultgoogle.php?mot='+find, true); 
		xhr.send(null);
}
</script>
</head>
<body>
<form name="f1">
<center><img src="logo.png" width="400" height="300" ></center><br>
<center><input name="find" id="Find" type="text" size="50" onkeyup="find()"><span><input type="submit" name="Find Google" value="Find Google"></span></center><br><br>

</form>
<div id="results"></div>
</body>
</html>
