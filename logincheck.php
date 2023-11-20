<?php
$conn=mysqli_connect("localhost","root","","pizzashop");
$email=$_POST["email"];
$password=$_POST["pass"];
$sql="select * from user where email='$email' and password='$password'";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res) > 0){
    session_start();
    // $name=$row['name'];
    $_SESSION['username'] = $email;
    setcookie("user",$email,time()+3600,"/");
header("Location:index.php");

echo '<script>alert("Login Successfully");</script>';
?>

<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php"/>
<?php
}
else{
    echo '<script>alert("Invalid Login");<script>';

    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/login.php"/>';
}
?>