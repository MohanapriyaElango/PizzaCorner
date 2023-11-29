<?php
session_start();
$email=$_SESSION["username"];
$name=$_POST['pname'];
$image=$_POST['pimage'];
$price=$_POST['pprice'];
$item=$_POST['qty'];

$conn=mysqli_connect("localhost","root","","pizzashop");
$sql="insert into cart(email,name,price,items,image) values('$email','$name','$price','$item','$image')";
if(isset($_SESSION['username']))
{
if(mysqli_query($conn,$sql));
{
    echo '<script>alert("Item added Successfully to cart");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php#menu"/>';
}
}
else{
    echo '<script>alert("Please login to continue....");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/login.html"/>';
}
?>