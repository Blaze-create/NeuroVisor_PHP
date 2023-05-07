<?php
session_start();
ob_start();
include_once "php/database.php";
$current_url = $_SERVER['REQUEST_URI'];
$path = parse_url($current_url, PHP_URL_PATH);
$page_name = basename($path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- INTERNAL LINK & SCRIPT -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <!-- <script src="js/common.js" defer></script> -->

    <!-- REMOTE LINK & SCRIPT -->
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Log In</title>
</head>

<body>
    <!-- PRELOADER -->
    <!-- <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div> -->

    <!-- NAV-BAR -->
  <?php
  include "navbar.php";
  ?>

    <?php
    $flag = false;
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (strlen($_POST['username']) > 0) {
            if (strlen($_POST['password']) > 0) {
            } else {
                $errormessage = "password is not set";
                $flag = true;
            }
        } else {
            $errormessage = "Username is not set";
            $flag = true;
        }

        $secondflag = false;
        $username = $_POST['username'];
        $mypassword = $_POST['password'];


        $sql = "SELECT * FROM account where name='$username'";
        $result = $conn->query($sql);

        if ($result->num_rows == 0) {
            $errormessage = "There is no account with this username";
            $secondflag = true;
        } else {
            while ($row = $result->fetch_assoc()) {
                if ($row['password'] == $mypassword) {
                    setcookie("cookie_user", $row['name'], time() + (86400 * 30), "/");
                    echo '<script>
                    window.location = "' . $_SESSION['previous_page'] . '";
                </script>';
                } else {
                    $errormessage = "Username or password is incorrect";
                }
            }
        }
    }
    ?>










    <div class="background">
        <div class="container-fluid">
            <div class="row form reverse">
                <div class="col-4">
                    <div class="title">
                        Join Us now!
                    </div>
                    <div class="subtitle">
                        Please join us if dont have an account yet!
                    </div>
                    <div class="btn">
                        <button class="btn-base white"><a href="register.php">Sign Up</a></button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="title">
                        Welcome Back!
                    </div>
                    <div class="option">
                        <i class="fa-brands fa-facebook fa-2x"></i>
                        <i class="fa-brands fa-google-plus-g fa-2x"></i>
                        <i class="fa-brands fa-linkedin-in fa-2x"></i>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="input-grp">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="username" name="username" required>
                        </div>
                        <div class="input-grp">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="btn-grp">
                            <input class="btn-base" type="submit" value="SIGN IN">
                        </div>
                        <?php
                        if (isset($errormessage)) {
                            echo '<div class="alert alert-danger" role="alert">
                            ' . $errormessage . '
                          </div>';
                        }
                        ?>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>
<?php
ob_end_flush();
?>