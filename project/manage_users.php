<?php session_start(); ?><?php include 'connect.php';?><!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Manage Books</title><meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<style type="text/css">
		body{
			background-color:#EFEBE9!important;
		}
	</style>
</head>
<body>
<div class="container">
	<?php include "admin_nav.php"; ?>
	<?php include "sec_nav_manage_users.php"; ?>	
	<?php
$q = "SELECT *FROM signup WHERE is_loggedin='yes'";
$re = mysqli_query($link,$q);

?><table class="table table-condensed table-hover table-striped">
<tr>
	<td>Name</td>
	<td>Semester</td>
	<td>Branch</td>
</tr>

<?php while ($r = mysqli_fetch_assoc($re)) {
		?><tr>	
				<td><?php echo $r['susername'];?></td>
				<td><?php echo $r['currentsem'];?></td>
				<td><?php echo $r['branch'];?></td>
		  </tr>	
<?php
}
?>
	
</div>








</body>
</html>
<?php 
if(isset($_POST['submit_search'])){
		include "nav_search.php";
		nav_search();
	}
?>