<?php
include_once 'day9_1_emp.php';

 //get form data

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dept=$_POST['dept'];
$position=$_POST['position'];
$basic_salary=$_POST['salary'];

//create Employee object

$emp=new Employee($name,$email,$phone,$dept,$position,$basic_salary);
$emp->displayInfo();
echo $emp->calculateNetSalary();


?>