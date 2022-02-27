<?php
$conn = mysqli_connect('localhost','root','','formdb');
extract($_POST);
$email=$_POST['email'];
$password=$_POST['password'];
if(isset($_POST['submit'])){
    $q = "insert into ajaxinsert (email,password) values ('$email','$password')";
    $query = mysqli_query($conn,$q);
    header('location:inserthtml.php');
}

?>