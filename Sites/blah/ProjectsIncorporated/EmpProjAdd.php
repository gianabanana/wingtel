<?php
	 session_start();
	 if ($_SESSION['login'] != '1') {
	 	session_destroy();
	 	header("Location:login.php");
	 } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Projects Incorporated</title>
	
	<link rel = "stylesheet" href = "style.css" type = "text/css">
</head>
<body>
<div id="container">
		<?php
			 include "header.php";
		?>

  <br /><br />
		<p align="center"><font size="+2" color="#004b6f">ADDING OF EMPLOYEE PROJECT RECORDS</font></p>
			<br />
			<!-- Start of FORM -->
			<form id="empprojadd" name="empprojadd" method="POST" action="EmpProjAddConfirm.php">
				<table border="1" cellpadding="5" align="center">
					<tr>
						<td>EmpProjNo.</td>
						<td><input type="text" name="empprojno" size="5" id="empprojno" value=""/></td>
					</tr>
					<tr>
						<td>NoOfHours</td>
						<td><input type="text" name="noofhours" size=4 id="noofhours" value=""/></td>
					</tr>
					<tr>
						<td>SSSNo</td>
						<td><input type="text" name="sssno" size=10 id="sssno" value=""/></td>
					</tr>
<tr>
						<td>ProjNo</td>
						<td><input type="text" name="projno" size=3 id="projno" value=""/></td>
					</tr>

					
	
	<?php
			$DBConnect = mysqli_connect('localhost','root','','projectsinc');
			if (!$DBConnect) {
				die(mysqli_error());
			}
			
			mysqli_close($DBConnect);
	?>
	
				<tr>
					<td align="center" colspan="2">
						<input type="submit" name="submit" id="submit" value="Add This Record"/>
						&nbsp;&nbsp;&nbsp;
						<input type="reset" name="clear" id="clear" value="Clear Values"/>
					</td>
				</tr>
			</table>
		</form>
			<!-- End of FORM -->
		<br /><br />
		<p align="center"><a href="maintenance.php">Back to Maintenance Module</a></p>
		<br /><br />
		<?php
			 include 'footer.php';
		?>
</div>
</body>
</html>

