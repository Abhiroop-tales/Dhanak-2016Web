<?php
session_start();
if(isset($_POST['search']))
{
	$con=mysqli_connect("localhost","root","","searchengine");
	$input=mysqli_real_escape_string($con,strip_tags($_POST['input']));
	$terms=explode(" ", $input);
	$_SESSION['search_word']=$input;
	
	
	$query = "SELECT * FROM search WHERE ";

	foreach ($terms as $each)
		{
		$i++;
		if ($i==1)
			{$query .= "keywords LIKE '%$each%' ";}
		else
			{$query .= "OR keywords LIKE '%$each%' ";}
		}
	//connect to database
	$query=mysqli_query($con,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$x=1;
		while ($row = mysqli_fetch_assoc($query)){
		$id = $row['id'];
		$title = $row['title'];
		$description = $row['description'];
		$keywords = $row['keywords'];
		$link = $row['link'];
		$_SESSION['title'.$x]=$title;
		$_SESSION['description'.$x]=$description;
		$_SESSION['link'.$x]=$link;
		
		$x=$x+1;
		
		
		
		}
	}
	
	else 
	{
		$_SESSION['search_results']= "No results Found for \"<b>$input</b>\" !";
		
	}
header('location:/Dhanak_2016_Repo/events/index.php');

	}
else
{
header('location:/Dhanak_2016_Repo/events/index.php');
}
?>
</html>