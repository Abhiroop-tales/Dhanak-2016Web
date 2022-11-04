<?php
session_start();
if(isset($_POST['answer']) and isset($_SESSION['q_no']))
 {
         
	 echo check();
 }
 else
 {
	header('location:../webbed');
}
function check()
{
if (preg_match("/^[A-Za-z]+$/", $_POST['answer'])) 
{
 

if(strlen($_POST['answer'])<50)
{
	include('../webbed/configdb_webbed.php');
	$college=$_SESSION['college'];
	$question=$_SESSION['q_no'];
	$username=$_SESSION['username'];
	$ans = mysqli_real_escape_string($mysqli,strip_tags($_POST['answer']));
	$sql = "INSERT INTO webbed_anslog (username, college, question, answer_log) VALUES('$username', '$college', '$question', '$ans')";
    $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
        $ans=md5($ans);
  /*For assigning qno*/
  
  
  if($question=='1')
{
	$query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='2';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
	$result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
                  $sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));
		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='2')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='3';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='3')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='split1';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		
		return 1;
	}
	else
	{
		return 2;
	}
}

if($question=='split1')
{
	$query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	$query1 = "SELECT qno,answer2 FROM webbed_questions WHERE qno = '$question' and answer2 = '$ans'";
	$query1=mysqli_query($mysqli,$query1);
	$numrows1 = mysqli_num_rows($query1);
	
	if($numrows > 0)
	{
		
		$question='4a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	else if($numrows1 > 0)
	{
		
		$question='4b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	
	else
	{
		return 4;
	}
}
if($question=='4a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='5a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='4b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='5b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='5a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='split2';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='split2')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	$query1 = "SELECT qno,answer2 FROM webbed_questions WHERE qno = '$question' and answer2 = '$ans'";
	$query1=mysqli_query($mysqli,$query1);
	$numrows1 = mysqli_num_rows($query1);
	
	if($numrows > 0)
	{
		
		$question='6a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	else if($numrows1 > 0)
	{
		
		$question='6b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	
	else
	{
		return 4;
	}
}
if($question=='5b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='6b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='6a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='7a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='6b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='7b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='7a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='8a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='7b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='split3';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='split3')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	$query1 = "SELECT qno,answer2 FROM webbed_questions WHERE qno = '$question' and answer2 = '$ans'";
	$query1=mysqli_query($mysqli,$query1);
	$numrows1 = mysqli_num_rows($query1);
	
	if($numrows > 0)
	{
		
		$question='8b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	else if($numrows1 > 0)
	{
		
		$question='8c';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	
	else
	{
		return 4;
	}
}
if($question=='8a')
{
$query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='9a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='8b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='9a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='8c')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='9b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='9a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='split4';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='split4')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	$query1 = "SELECT qno,answer2 FROM webbed_questions WHERE qno = '$question' and answer2 = '$ans'";
	$query1=mysqli_query($mysqli,$query1);
	$numrows1 = mysqli_num_rows($query1);
	
	if($numrows > 0)
	{
		
		$question='10a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	else if($numrows1 > 0)
	{
		
		$question='10b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	
	else
	{
		return 4;
	}
}
if($question=='9b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='split5';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='split5')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	$query1 = "SELECT qno,answer2 FROM webbed_questions WHERE qno = '$question' and answer2 = '$ans'";
	$query1=mysqli_query($mysqli,$query1);
	$numrows1 = mysqli_num_rows($query1);
	
	if($numrows > 0)
	{
		
		$question='10b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	else if($numrows1 > 0)
	{
		
		$question='10c';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 3;
	}
	
	else
	{
		return 4;
	}
}
if($question=='10a')
{
$query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='11a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='10b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='11b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='10c')
{
$query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='11c';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='11a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='12a';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='11b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='12b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='11c')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='12b';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='12a')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='13';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='12b')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='13';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='13')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='14';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='14')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='15';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='15')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='16';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}
if($question=='16')
{
  $query = "SELECT qno,answer1 FROM webbed_questions WHERE qno = '$question' and answer1 = '$ans'";
	$query=mysqli_query($mysqli,$query);
	$numrows = mysqli_num_rows($query);
	
	if($numrows > 0)
	{
		$_SESSION['score']=$_SESSION['score']+1;
		$question='17';
                unset($_SESSION['q_no']);
		$score=$_SESSION['score'];
		$sql = "UPDATE webbed_score SET score='$score', qno='$question' WHERE username='$username'" ;
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
$sql1="UPDATE webbed_score SET time_stamp =CURRENT_TIMESTAMP WHERE username='$username'";
$result2 = mysqli_query($mysqli,$sql1) or die(mysqli_error($mysqli));

		$_SESSION['q_no_display']=$_SESSION['q_no_display']+1;
		return 1;
	}
	else
	{
		return 2;
	}
}

  
  
  
  /*End of question no */
  
}
else
{
	$college=$_SESSION['college'];
	$question=$_SESSION['q_no'];
	$username=$_SESSION['username'];
$mysqli=mysqli_connect('localhost','dhana15i','h^k0x4L#1x4_','dhana15i_retro16') or die("Database Error");
	
	
  $sql = "INSERT INTO webbed_anslog (username, college, question, answer_log) VALUES('$username', '$college', '$question', '')";
  $result2 = mysqli_query($mysqli,$sql) or die(mysqli_error($mysqli));
   return 2;

}
}
else
{
return 2;
}
}
?>