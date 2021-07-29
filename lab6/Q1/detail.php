<?php
require_once("./Company.php");
require_once("./Employee.php");
$gces = new Company;
$gces->name = "Gandaki College of Engineering and Science";
$gces->adress = "Pokhara";
array_push($gces->employees, new Employee("Ram Poudel","pokhara"), new Employee("Shivaji Chals","Kathmandu"),new Employee("Shyam laao" , "Chitwan"));
//before sarting html cod

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
.table{
	left:auto;
	margin:auto;
	border-collapse:collapse;
	height:50%;
	width:50%;
    border:collapse;
    background-color:cyan;
}
</style>
<body>
<h1 style ="text-align: center;" ><?=$gces->name?></h1>
<h1 style ="text-align: center;"><?=$gces->adress?></h6>
<table class="table" border="2px collaspe" style="text-align:center; color:blue;">
<tr>
	<th>name</th>
	<th>adress</th>
</tr>
<?php foreach($gces->employees as $employee) { ?>
	<tr>
		<td><?= $employee->name ?></td>
		<td><?= $employee->adress ?></td>
	</tr>
<?php } ?>
<p style="text-align:center;"><?="Total number of the employee= 3"?>


</table>
</body>
</html>