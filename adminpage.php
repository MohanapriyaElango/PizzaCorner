<?php
    session_start();
    // echo $_SESSION['username'];
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Corner</title>
    <style>
        #addimage {
            display: none;
        }

        * {
            background-color: black;
            color: white;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        #form {
            border: 2px #aaa solid;
            /* padding: 5%; */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 50%;
            height: 50%;
            gap: 0.3rem;
        }

        label {
            display: inline-flex;
        }

        input {
            height: 10%;
            width: 40%;

        }

        #btn {
            color: black;
            background-color: red;
            font-size: 15px;
            /* padding-top: 30px; */
            height: 10%;
            width: 25%;
            margin-top: 40px;
            font-weight: 700;
        }

        #addimg {
            /* border: 1px white solid; */
            height: 30%;
            width: 60%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #form #addimg p:hover {
            text-decoration: underline;
            text-decoration-color: red;
        }

        #logout {
            position: absolute;
            right: 10%;
            top: 10%;
            font-weight: 400;
            padding: 5px;
            font-size: 15px;
            ;
        }

        #logout:hover {
            background-color: red;
            color: black;
            font-weight: 400;
        }
    </style>
</head>

<body>
    <?php
    if(isset($_SESSION['username']))
    {
        ?>
    <form action="admininsert.php" method="post" enctype="multipart/form-data" id="form">
        <div id="addimg">
            <p id="add">Add an image</p>
            <input type="file" name="addimage" id="addimage" required>
        </div>
        <!-- <label for="pizzaName">Pizza Name:</label> -->
        Pizza Name:
        <input type="text" name="pizzaName" id="pizzaName">

        <label for="pizzaPrice">Pizza Price:</label>
        <input type="number" name="pizzaPrice" id="pizzaPrice" required>

        <input type="submit" id="btn" name="add" value="Add Pizza" required>
    </form>
    <form action="adminlogout.php" method="post">
    <button id="logout">LOGOUT</button>
</form>
    <script>
        document.getElementById("add").addEventListener("click", function () {
            document.getElementById("addimage").click();
        })
        document.getElementById("add").addEventListener("click", function () {
            document.getElementById("addimage").click();
        })
    </script>
    <?php
    }
    else{
        echo "<script>alert('Please login to continue');</script>";
        echo '<meta http-equiv="refresh" content="0;url=http://localhost/IP_aPROJECT/index.php#home"/>';
    }
    ?>

</body>
</html>