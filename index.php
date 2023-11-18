<?php
session_start();
// $email = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Corner</title>
    <link rel="icon" href="images/pizzalogo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
    #loginoptions {
        display: none
    }

    #loginbox:hover {
        display: block;
    }
    .dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content .logout:hover {background-color: red;
color: black;}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
</style>
<script>
    function getSelectedValue() {
        // Get the select element by its ID
        var selectElement = document.getElementById("loginoption");

        // Get the selected option
        var selectedOption = selectElement.options[selectElement.selectedIndex];

        // Get the value of the selected option
        var selectedValue = selectedOption.value;
        if (selectedValue == "User") {
            $(".user-account").addClass('active', 5000);
        }
        else if (selectedValue == "Admin") {
            $(".admin-account").addClass('active', 5000);
        }
        // Display the selected value (you can do whatever you want with it)
    }
</script>

<body>

    <header class="header">
    
        <div id="menu-btn" class="fas fa-bars icons"></div>
        <div id="search-btn" class="fas fa-search icons"></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#menu">Menu</a>
            <a href="#about">About</a>
            <span class="space"></span>
            <a href="#order">Orders</a>
            <a href="#contact">Contact</a>
            <select name="loginoption" id="loginoption" onchange="getSelectedValue()">
                <option value="">Login</option>
                <option value="User">User</option>
                <option value="Admin">Admin</option>
            </select>
            <!-- <a href="login.html">Logout</a> -->

            <!-- <a href="#Login" id="loginbox">Login -->
            <!-- <select>
                    <option value="Admin">Admin</option>
                    <option value="User">User</option>
                </select> -->
            <!-- </a> -->
            <!-- <div id="loginoptions">
                <p>Admin</p>
                <p>User</p>
            </div> -->
         

        </nav>
     
        <div class="icons2">
            <div class="dropdown">
                <a class="fas fa-user icons" href="login.html" ></a>
                <div class="dropdown-content">
                    <?php
                    if(isset($_SESSION['username']))
                    {
                        ?>
                    
                    <!-- <ul class="dropdown-menu">
                        <li class="dropdown-item"><--?php echo $_SESSION['username'];?></li>
                    </ul> -->
                    <a href="logout.php" class="logout">LOGOUT</a>
                    <?php
                    }else{
                        ?>
                    <a href="login.html">LOGIN</a>
                    <?php
                    }
                    ?>
                </div>
            </div>            
            <div id="order-btn" class="fas fa-box icons"></div>
            <div id="cart-btn" class="fas fa-shopping-cart icons"><span>()</span></div>

        </div>
        <a href="#home" class="logo"><img src="images/pizzalogo2.jpg" alt="pizza"></a>

        <form action="" class="search-form">
            <input type="search" name="" placeholder="Search here....." id="search-box">
            <label for="search-box" class="fas fa-search icons"></label>
        </form>
    </header>

    <div class="user-account">
        <section>
        <?php
                if(!isset($_SESSION['username']))
                {
                    ?>
            <div id="close-account"><span>close</span></div>
            <div class="user">
                <p><span>You are not logged in now!</span></p>
            </div>
            <div class="display-orders">
                <p><span>your cart is empty!</span></p>
            </div>
            <div class="flex">
                <form action="logincheck.php" method="post">
                    <h3>Login Now..</h3>
                    <input type="email" name="email" required class="box" placeholder="Enter the email" maxlength="50">
                    <input type="password" name="pass" required class="box" placeholder="Enter the password"
                        maxlength="20">
                    <input type="submit" value="login-now" name="login" class="btn">
                </form>
                <form action="signup.php" method="post">
                    <h3>Register Now</h3>
                    <input type="text" name="name"  required
                        class="box" placeholder="Enter your username" maxlength="50">
                        <input type="text" name="phone"  required
                        class="box" placeholder="Enter your phone number" maxlength="10">
                    <input type="text" name="email" required class="box" placeholder="Enter your email" >
                    <input type="password" name="pass" required class="box" placeholder="Enter Your password"
                        maxlength="30">
                    <input type="password" name="cpass" required class="box" placeholder="Enter Your password"
                        maxlength="30">
                    <input type="submit" value="Register Now.." name="login" class="btn">
                </form>
            </div>
            <?php
                }
                else
                {
                    ?>
                    <div id="close-account"><span>close</span></div>
                    <div class="user">
                <p><span>You are already logged in now!</span></p>
            </div>
            <?php

                }
                ?>
        </section>
    </div>

    <div class="admin-account">
        <section>
            <div id="close-admin"><span>close</span></div>
            <div class="user">
                <p><span>You are not logged in now!</span></p>
            </div>
            <div class="flex">
                <form action="adminlogin.php" method="post">
                    <h3>Admin Login</h3>
                    <input type="text" name="adminemail" required class="box" placeholder="Enter the email" maxlength="50">
                    <input type="password" name="adminpass" required class="box" placeholder="Enter the password"
                        maxlength="20">
                    <input type="submit" value="login-now" name="adminlogin" class="btn">
                </form>
            </div>

        </section>

    </div>

    <div class="my-orders">
        <section>
           <?php
           if(isset($_SESSION['username']))
           {
            ?>
            <div id="close-orders"><span>close</span></div>
            <h3 class="title">My Orders</h3>
            <!-- <div class="box">
                <p>placed on : <span>06/04/2022</span> </p>
                <p>name : <span>shaikh anas</span> </p>
                <p>number : <span>1234567890</span></p>
                <p>address : <span>flat no. 123, bulding no. 2, jogeshwari, mumbai, india - 400104</span></p>
                <p>payment method : <span>cash on delivery</span></p>
                <p>your orders : <span>pizza 01 $3/- x 2, pizza 03 $2/- x 1, pizza 06 $4/- x 4, pizza 07, $2/- x
                        1</span></p>
                <p>total price : <span>$11/-</span></p>
                <p>payment status : <span style="color: var(--red);">pending</span> </p>
            </div>
            <div class="box">
                <p>placed on : <span>06/04/2022</span> </p>
                <p>name : <span>shaikh anas</span> </p>
                <p>number : <span>1234567890</span></p>
                <p>address : <span>flat no. 123, bulding no. 2, jogeshwari, mumbai, india - 400104</span></p>
                <p>payment method : <span>cash on delivery</span></p>
                <p>your orders : <span>pizza 01 $3/- x 2, pizza 03 $2/- x 1, pizza 06 $4/- x 4, pizza 07, $2/- x
                        1</span></p>
                <p>total price : <span>$11/-</span></p>
                <p>payment status : <span style="color: var(--red);">pending</span> </p>
            </div> -->
            <?php
               $con1=mysqli_connect("localhost","root","","pizzashop");
               $email=$_SESSION['username'];
               $sqli="select * from orders where email='$email'";
               $result=mysqli_query($con1,$sqli);
               if(mysqli_num_rows($result)>0)
               {
               while($row=mysqli_fetch_assoc($result))
               {
                // email,date,name,number,address,pincode,paymentmethod,itemorder,total,paymentstatus
                $date=$row['date'];
                $name=$row['name'];
                $number=$row['number'];
                $address=$row['address'];
                $pincode=$row['pincode'];
                $payment=$row['paymentmethod'];
                $order=$row['itemorder'];
                $totalprice=$row['total'];
                $status=$row['paymentstatus'];
                echo '<div class="box">';
                echo '<p>Placed On : <span>'.$date.'</span> </p>';
                echo '<p>name : <span>'.$name.'</span> </p>';
                echo '<p>number : <span>'.$number.'</span></p>';
                echo '<p>address : <span>'.$address.' - '.$pincode.'</span></p>';
                echo '<p>payment method : <span>'.$payment.'</span></p>';
                echo '<p>your orders : <span>'.$order.'</span></p>';
                echo '<p>total price : <span>'.$totalprice.'</span></p>';
                echo '<p>payment status : <span style="color: var(--green);">Done</span> </p>';
                echo '</div> ';
               }
            }
            else{
                // echo '<div id="close-orders"><span>close</span></div>';
                echo '<p style="color:white; font-size:25px; position:absolute; top:35%; ">No Orders are Placed....</p>';
                echo '<form action="#menu" method="post">';
                echo  '<button type="submit" style="background:red; color:black; padding:5px;font-weight: bold; font-size:15px;position:absolute; top: 50%; right: 45%;">MENU</button>';
                echo '</form>';
            }
            ?>
            <?php
           }
           else{
            ?>
            
        
                <div id="close-orders"><span>close</span></div>
                <p style="color:white; font-size:25px; position:absolute; top:35%; ">You are not logged in....</p>
                <form action="login.html" method="post">
                    <button type="submit" style="background:red; color:black; padding:5px;font-weight: bold; font-size:15px;position:absolute; top: 50%; right: 45%;">LOGIN</button>
                </form>
                <?php
           }
           ?>
        
        </section>
    </div>
    <div class="shopping-cart">
        <section>
            <?php
            if(isset($_SESSION['username']))
            {
               ?>
            <div id="close-cart"><span>close</span></div>
            <?php
$con = mysqli_connect("localhost", "root", "", "pizzashop");
$email=$_SESSION["username"];
$sql = "SELECT * FROM cart WHERE email='$email'";
$res = mysqli_query($con, $sql); // Use mysqli_query instead of $conn->query
$total=0;
if(mysqli_num_rows($res)>0)
{
while ($row = mysqli_fetch_assoc($res)) {
    $cname = $row['name'];
    $cimage = $row['image'];
    $cprice = $row['price'];
    $citems = $row['items'];
    $total=$total+($cprice*$citems);

    echo '<div class="box">';
    // echo '<a href="cartremove.php" class="fas fa-times"></a>';
    echo '<form action="cartremove.php" method="post">';
    echo '<input type="hidden" name="item_name" value="' . $cname . '">';
    echo '<button type="submit" class="fas fa-times icons" name="remove_item" style="cursor: pointer; color: red; background:black; font-size: 10px;"></button>';
    echo '</form>';
    echo '<img src="' . $cimage . '" alt="pizza" class="pizza1">';
    echo '<div class="content">';
    echo '<p>' . $cname . ' <span>($' . $cprice . '/- x ' . $citems . ')</span></p>';
    echo '<form action="cartupdate.php" method="post">';
    echo '<input type="hidden" name="item_name" value="' . $cname . '">';
    echo '<input type="number" class="qty" name="qty" min="1" value="'.$citems.'" max="100">';
    echo '<button type="submit" class="fas fa-edit" name="update-qty"></button>';
    echo '</form>';
    echo '</div>';
    echo '</div>';
}
}
else{
    echo '<p style="color:white; font-size:25px; margin-left:30px; ">You Cart is Empty....</p>';
}
    echo '<div href="" class="btn" style="color:white; background: black;">Total Amount: $'.$total.'/-</div>';
?>

            
            <a href="#order" class="btn">Order Now</a>
            <?php
            }
            else{
                ?>
                <div id="close-cart"><span>close</span></div>
                <p style="color:white; font-size:25px; position:absolute; top:35%; ">You are not logged in....</p>
                <form action="login.html" method="post">
                    <button type="submit" style="background:red; color:black; padding:5px;font-weight: bold; font-size:15px;position:absolute; top: 50%; right: 45%;">LOGIN</button>
                </form>
                <?php
            }
            ?>
        </section>
    </div>


    <section class="home" id="home">
        <div class="content">
            <img src="images/pizza1.png" style="height: 480px; width: 480px;">
            <h2 style="color:white">
            <?php
            if(isset($_SESSION['username']))
            {
            echo "Welcome ".$_COOKIE['user'];
            }
            ?>
            </h2>
            <h3>A slice a day.. The sad away...</h3>
            <p>You can't buy happiness But you can buy pizza and that's kind of the same thing</p>
            <a href="#menu" class="btn">Our Menu</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading">About Us</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/about-1.svg" alt="about-1">
                <h3>Made with Love</h3>
                <p>With the fire roaring and the chimney smoking, Pizza with Love will leave lasting memories for you
                    and your guests</p>
            </div>
            <div class="box">
                <img src="images/about-2.svg" alt="about-2">
                <h3>30 minutes Delivery</h3>
                <p>When happiness knocks on your door, it often arrives in unexpected and delightful ways.</p>
            </div>
            <div class="box">
                <img src="images/about-3.svg" alt="about-3">
                <h3>Share with friends</h3>
                <p>Sharing a pizza with friends isn't just about food; it's about the the moments that become
                    unforgettable memories</p>
            </div>
        </div>

    </section>

    <section id="menu" class="menu">

        <h1 class="heading">Our Menu</h1>

        <div class="box-container">

            <?php
            $conn= new mysqli("localhost","root","","pizzashop");
            $sql="select * from pizza";
            $res=$conn->query($sql);
            while($row=mysqli_fetch_assoc($res))
            {
                $name=$row['name'];
                $image=$row['image'];
                $price=$row['price'];

                echo '<div class="box">';
                echo '<div class="price">$<span>'.$price.'</span>/-</div>';
                echo '<img src="'.$image.'" alt="pizza">';
                echo '<div class="name">'.$name.'</div>';
                echo '<form action="cart.php" method="post">';
                echo '<input type="hidden" name="pname" value="'.$name.'">';
                echo '<input type="hidden" name="pimage" value="'.$image.'">';
                echo '<input type="hidden" name="pprice"value="'.$price.'">';
                echo '<input type="number" min="1" max="100"  class="qty" name="qty">'; //value="0"
                echo '<input type="submit" value="Add To Cart" name="add_to_cart" class="btn">';
                echo '</form>';
                echo '</div>';

            }
            ?>

        </div>

    </section>

    <section class="order" id="order">

        <h1 class="heading">Order Now</h1>

        <form action="orderplace.php" method="post">

            <div class="display-orders">
                <?php
                if(isset($_SESSION['username']))
                {
                    ?>
                
                <?php
                $orders="";
               $connection = mysqli_connect("localhost", "root", "", "pizzashop");
               $email = $_SESSION['username'];
               $sqlstmt = "SELECT * FROM cart WHERE email='$email'";
               $res1 = mysqli_query($connection, $sqlstmt); 
              if(mysqli_num_rows($res1)>0)
            {
            while ($row = mysqli_fetch_assoc($res1)) {
                 $cname1 = $row['name'];
                 $cprice1 = $row['price'];
                 $citems1 = $row['items'];
                 $orders= $orders." ".$cname1." ".$cprice1."/- x ".$citems1." "; 
                 echo '<p>' . $cname1 . '<span>($' . $cprice1 . '/- x ' . $citems1 . ')</span></p>';
                 }
             }
             else 
             {
                echo '<p><a href="#menu">Your Cart is Empty...</a></p>';
            }
    
                }
                else{
                    ?>
                    <p><a href="login.html">You are not logged in...</a></p>
                    <?php
                }
                ?>
            </div>

            <div class="flex">
                <div class="inputBox">
                    <span>Your Name :</span>
                    <input type="text" name="name" class="box" required placeholder="enter your name" maxlength="20">
                </div>
                <div class="inputBox">
                    <span>Your Number :</span>
                    <input type="text" name="number" class="box" required placeholder="enter your number" maxlength="10">
                </div>
                <div class="inputBox">
                    <span>Payment Method</span>
                    <!-- <select name="payment" class="box">
                        <option value="cash on delivery">cash on delivery</option>
                        <option value="credit card">credit card</option>
                        <option value="paytm">paytm</option>
                        <option value="paypal">paypal</option>
                    </select> -->
                    <input type="text" name="payment" class="box" required placeholder="enter the payment method">
                </div>
                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text" name="address" class="box" required placeholder="e.g. street name" maxlength="50">
                </div>
                <div class="inputBox">
                    <span>Total Amount :</span>
                    <?php
                    if(isset($_SESSION['username'])){
                    echo '<input type="text" name="total" class="box" required value="$'.$total.'/-"maxlength="50" readonly>';
                    }
                    else{
                        echo '<input type="text" name="total" class="box" required value="$0/-"maxlength="50" readonly>';
                    }
                        ?>
                </div>
                <div class="inputBox">
                    <span>pin code :</span>
                    <input type="text" name="pincode" class="box"  placeholder="e.g. 123456" maxlength="6"> 
                    <!-- //required -->
                </div>
            </div>
            <?php
            if(isset($_SESSION['username']))
            {
            echo '<input type="hidden" value="'.$orders.'" name="orders" readonly>';
            }
            else{
                echo '<input type="hidden" value="" name="orders" readonly>';
            }
            ?>
            <input type="submit" value="Order Now" class="btn" name="order">

        </form>

    </section>

    <!-- order section ends -->


    <!-- footer section starts  -->
     
    <section class="footer" id="contact">

        <div class="box-container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Phone Number</h3>
                <p>+91 8807869098</p>
                <p>+91 9342220243</p>
            </div>

            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Our Address</h3>
                <p>Kanchipuram, India - 631502</p>
            </div>

            <div class="box">
                <i class="fas fa-clock"></i>
                <h3>Opening Hours</h3>
                <p>09:00am to 10:00pm</p>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Address</h3>
                <p>pizzacorner@gmail.com</p>
                <p>mohanapriya@gmail.com</p>
            </div>

        </div>

    </section>














    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <!-- <script>
        $(document).ready(function () {
            $(".fa-search").click(function () {
                $(".search-form").fadeIn();
            });
            $(".fa-times").click(function () {
                $(".search-form").fadeOut();
            });
        });
    </script> -->
    <!-- <script>
        $(document).ready(function () {
            $("#search-btn").click(function () {
                $(".search-form").slideToggle("slow");
                $("#search-btn").toggleClass("fa-times");
            });
        });
    </script> -->
</body>
</html>