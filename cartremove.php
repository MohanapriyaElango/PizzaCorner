<?php

    $item_id = $_POST['item_name'];
    $conn = mysqli_connect("localhost", "root", "", "pizzashop");
    $sql = "DELETE FROM cart WHERE name = '$item_id'";
    mysqli_query($conn, $sql);
    echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php#home"/>';
    // if (mysqli_query($conn, $sql)) {
    //     echo '<script>alert("Item removed successfully.");</script>';
    //     echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_PROJECT/index.php#home"/>';
    // } else {
    //     echo '<script>alert("Failed to remove item.");</script>';
    // }

?>
