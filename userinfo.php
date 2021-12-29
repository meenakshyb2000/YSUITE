<?php


$con=mysqli_connect('localhost:3308','root','');

if($con)
{
    echo "Connection Successfull";
}
else
{
    echo "Not Connected";
}
mysqli_select_db($con,'ysuite');

//to access the data user enters in the webpage; name attribute is used for this
//our method to access data is post

$user = $_POST['user']; //wtvr data is entered for the name user will be stored in the var $user
$email = $_POST['email'];
$address = $_POST['address'];
$isd = $_POST['isd'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];
//now the data is accessed

//$query is a variable created for dealing with the queries
$query= "insert into customers(user,email,address,isd,mobile,comments)
values ('$user','$email','$address','$isd','$mobile','$comments')";

mysqli_query($con,$query); //firing the query

//after entering we have to remain in the same page
header('location:index.php');
?>