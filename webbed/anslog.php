<?php
include('../configdb.php');
?>
<?php session_start();
if($_SESSION['username']=='abhi09' or $_SESSION['username'] == 'Shandman' or $_SESSION['username'] == 'ONETAPS' or $_SESSION['username'] == 'prachibisht' or $_SESSION['username'] == 'admin2' or $_SESSION['username'] == 'senpaiwoman'):?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../css/cord_style.css">
<link rel="stylesheet" type="text/css" href="../css/cord_nav.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Webbed Answer Log</title>
</head>

<body>
<div id="container">
<div id="header">
	<div id="header1"></div>
	<div id="header2">
		<h1>Answer Log</h1>
	</div>
</div>
<div id="navbar">
	<nav>
		<ul>
		</ul>
	</nav>
</div>
<div id="content">
	<div id="pageheading">
	<h1>Answers</h1>
	</div>
	<div class="content1">
	<?php
	$query = "SELECT id,username,college,question,answer_log,time_stamp FROM webbed_anslog WHERE id>0 ORDER BY time_stamp";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	if($numrows > 0)
	{
		echo '<table border="1" cellspacing="0"><tr><td><b>S.no<b></td><td><b>Username<b></td><td><b>College<b></td><td><b>Question<b></td><td><b>Answer<b></td><td><b>Time<b></td></tr>';
        $rank=1;
		while ($row = mysqli_fetch_assoc($query)){
		$username = $row['username'];
		$question = $row['question'];
		$college = $row['college'];
		$answer_log = $row['answer_log'];
		$time = $row['time_stamp'];
		echo '<tr><td align="center">'.$rank.'</td><td>'.$username.'</td><td align="center">'.$college.'</td><td align="center">'.$question.'</td><td align="center">'.$answer_log.'</td><td align="center">'.$time.'</td></tr>';
		$rank=$rank+1;
		}
		echo '</table>';
	}
	?>
	</div>
	<div class="content2">
	
	</div>
</div>
<div id="footer"></div>
</div>
</body>
</html>
<?php else: ?><?php header('location:../webbed');?>
<?php endif ?> 