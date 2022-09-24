<?php include('connection.php'); 

$q = mysql_query("SELECT email from subscribers where email = '".$_POST['semail']."'");
$num_rows = mysql_num_rows($q);
if($num_rows==0)
{
	$sql = mysql_query("insert into subscribers set email = '".$_POST['semail']."'");
	echo 'success';
}
else
{
	echo 'fail';
}



?>