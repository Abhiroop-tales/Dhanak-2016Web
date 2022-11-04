<html><head><title>Search Engine</title>
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>

<center>
<h1 style="color:#09F; font-size:35px;">Doogle</h1>
<form action="results.php" method="post">
 <input type="text" name="input" size="50" onkeyup="showHint(this.value)" required>
 <p>Suggestions: <span id="txtHint"></span></p>
 <br>
 <input type="submit" value="Search" name="search">
</form>
</center>
<?php
session_start();
if(isset($_SESSION['search_word']))
{
	if(!isset($_SESSION['search_results']))
	{
		$word=$_SESSION['search_word'];
		echo 'Results found for '.$word.'!';
		$x=1;
		while($_SESSION['title'.$x])
		{
			$title=$_SESSION['title'.$x];
			$description=$_SESSION['description'.$x];
			$link=$_SESSION[$x]['link'.$x];
			
			echo '<h2><a href="'.$link.'">'.$title.'</a></h2>';
			echo '<p>'.$description.'</p>';
			echo '<br>';
			$x=$x+1;
		}
		
		$y=1;
		while($_SESSION['title'.$y])
		{
			unset($_SESSION['title'.$y]);
			unset($_SESSION['description'.$y]);
			unset($_SESSION['link'.$y]);
			$y=$y+1;
		}
	}
	else
	{
		$result=$_SESSION['search_results'];
		echo '<p>'.$result.'</p>';
		unset($_SESSION['search_results']);
	}
	unset($_SESSION['search_word']);
}
	
?>
</body>
</html>