<?php
$uploadDir = 'images/'; // Specify the directory where you want to store the images
if (isset($_FILES['addimage'])) {
    $uploadFile = $uploadDir . basename($_FILES['addimage']['name']);
    if (move_uploaded_file($_FILES['addimage']['tmp_name'], $uploadFile)) {
        $conn=mysqli_connect("localhost","root","","pizzashop");
        $name=$_POST["pizzaName"];
        $price=$_POST["pizzaPrice"];
        $sql="insert into pizza(name,image,price) VALUES ('$name','$uploadFile','$price')";
        if($conn->query($sql)){
            echo "<script>alert ('Inserted Mohana....be happy');</script>";
            echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/adminpage.php"/>';
        }
    } 
} 
else{
    echo "Photo not uploaded";
} 
?>