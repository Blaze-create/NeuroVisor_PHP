<?php
session_start();
ob_start();
include_once "php/database.php";
$current_url = $_SERVER['REQUEST_URI'];
$path = parse_url($current_url, PHP_URL_PATH);
$page_name = basename($path);
$_SESSION['previous_page'] = $page_name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>CheckOut</title>
</head>



<body>
    <?php
    include "navbar.php";
    ?>

    <?php
    if (!isset($_SESSION['user']) || strlen($_SESSION['user']) == 0) {
        echo "<script>
            alert('You must first sign in');
            </script>";
        echo '<script>
        window.location = "login.php";
        </script>';
    }
    $s_user = $_SESSION['user'];
    $sql = "SELECT id FROM account WHERE name='$s_user'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $First_user_id = $row['id'];
        }
    }

    $sql = "SELECT * FROM myorder WHERE user_id='$First_user_id'";
    if ($conn->query($sql)->num_rows > 0) {
        echo "<script>
            alert('You already have an order  on stand by');
        </script>";
        echo '<script>
        window.location = "shop.php";
        </script>';
    }







    $price = "";
    $tier = $_GET['tier'];
    if ($tier == "basic") {
        $price = "$999.99";
    } elseif ($tier == "pro") {
        $price = "$1299.00";
    } elseif ($tier == "deluxe") {
        $price = '$1999.99';
    } else {
        echo $tier;
        echo '<script>
        window.location = "shop.php";
        </script>';
    }
    $flag = false;
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (strlen($_POST["name"]) > 0) {
            if (strlen($_POST["email"]) > 0) {
                if (strlen($_POST["address"]) > 0) {
                    if (strlen($_POST["city"]) > 0) {
                    } else {
                        $errormessage = "City is not set";
                        $flag = true;
                    }
                } else {
                    $errormessage = "Address is not set";
                    $flag = true;
                }
            } else {
                $errormessage = "Email is not set";
                $flag = true;
            }
        } else {
            $errormessage = "Name is not set";
            $flag = true;
        }

        if ($flag == false) {
            $Ltier = $_POST["tier"];
            $fullname = $_POST["name"];
            $email = $_POST["email"];
            $address = $_POST["city"] . ", " . $_POST["address"];
            $username = $_SESSION['user'];

            $sql = "SELECT id from account WHERE name='$username'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $user_id = $row['id'];
                }
            }
            $Fprice = "";

            if ($Ltier == "basic") {
                $Fprice = "$999.99";
            } elseif ($Ltier == "pro") {
                $Fprice = "$1299.00";
            } elseif ($Ltier == "deluxe") {
                $Fprice = '$1999.99';
            }

            $sql = "INSERT INTO myorder (user_id, full_name, tier, price, address, status) VALUES ('$user_id', '$fullname','$Ltier', '$Fprice', '$address', 'pending')";
            if ($conn->query($sql) === TRUE) {
                echo "<script>
                alert('Order Confirm');
                </script>";
                echo '<script>
                        window.location = "index.php";
                        </script>';
            }
            exit;
        }
    }
    ?>


    <div class="background column">
        <div class="container-fluid">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="row billing">

                    <div class="col">
                        <div class="title">
                            Billing Address
                        </div>
                        <?php
                        echo '<input type="hidden" name="tier" value="' . $tier . '">';
                        echo '<input type="hidden" name="price" value="' . $price . '">';
                        ?>

                        <input type="hidden" name="price">
                        <input type="text" placeholder="Full Name" name="name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" placeholder="Address" name="address">
                        <input type="text" placeholder="City" name="city">
                    </div>
                    <div class="col">
                        <div class="title">
                            Payment
                        </div>
                        <div class="pay">
                            Cash upon delivery
                        </div>
                    </div>
                    <div class="col">
                        <div class="title">
                            Cart
                        </div>
                        <div class="table-name">
                            <h6>Tier</h6>
                            <h6>Price</h6>
                        </div>
                        <div class="item">
                            <div class="name">
                                <?php
                                echo $tier;
                                ?>
                            </div>
                            <div class="price">
                                <?php
                                echo $price;
                                ?>
                            </div>
                        </div>

                        <div class="total">
                            <h6>Total:</h6>
                            <?php
                            echo $price;
                            ?>
                        </div>
                        <div class="submit">
                            <input type="submit" value="Submit">
                        </div>
                        <?php
                        if (isset($errormessage)) {
                            echo '<div class="alert alert-danger" role="alert">
                            ' . $errormessage . '
                          </div>';
                        }
                        ?>
                    </div>

                </div>
            </form>
        </div>
    </div>
</body>

</html>
<?php
ob_end_flush();
?>