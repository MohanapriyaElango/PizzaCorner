<?php
session_start();
$email=$_SESSION['username'];
$name=$_POST['name'];
$number=$_POST['number'];
$payment=$_POST['payment'];
$address=$_POST['address'];
$total=$_POST['total'];
$pincode=$_POST['pincode'];
$orders=$_POST['orders'];
$date=date('Y/m/d');

$conn=mysqli_connect("localhost","root","","pizzashop");
$sql="insert into orders(email,date,name,number,address,pincode,paymentmethod,itemorder,total,paymentstatus) values ('$email','$date','$name','$number','$address','$pincode','$payment','$orders','$total','Done')";
if(isset($_SESSION['username']))
{
if(mysqli_query($conn,$sql))
{
    $sql2="DELETE FROM cart WHERE email = '$email'";
    mysqli_query($conn,$sql2);
    echo '<script>alert("Your Order is Placed Successfully....");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php#home"/>';

    
}
else{
    echo '<script>alert("Your Order is not Placed....");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php#order"/>';
}
}
else{
    echo '<script>alert("Please login to continue....");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/login.html"/>';
}
?>