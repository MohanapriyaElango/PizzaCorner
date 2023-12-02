<?php
$item_id = $_POST['item_name'];
$qty=$_POST["qty"];
$conn = mysqli_connect("localhost", "root", "", "pizzashop");
$sql = "UPDATE cart SET items = '$qty' WHERE name = '$item_id'";
mysqli_query($conn, $sql);
echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php#home"/>';

?>