<?php
$conn=mysqli_connect("localhost","root","","pizzashop");
$name=$_POST["name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$password=$_POST["pass"];
$cpassword=$_POST["cpass"];
if($password===$cpassword)
{
    $sql="insert into user (name,phone,email,password) values('$name','$phone','$email','$password')";
    if(mysqli_query($conn,$sql))
    {
        echo '<script>alert("You are registered Successfully");</script>';
    ?>
    <meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/login.html"/>
    <?php
    }
    else{
        echo '<script>alert("This email id already exists");</script>';
        echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/login.html"/>';
    }
}
else{
    echo '<script>alert("Password and Confirm Password does not match");</script>';
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php"/>';
}
?>