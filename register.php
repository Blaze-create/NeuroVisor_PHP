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

    <!-- REMOTE LINK & SCRIPT -->
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Sign Up</title>
</head>

<body>
    <!-- <nav class="mynav mycollapse" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="label">
            <h3><span>Neuro</span>Visor_</h3>
        </div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Our Teams</a></li>
            <li><button>Sign up</button></li>
        </ul>
    </nav> -->
    <?php
    include "navbar.php";
    ?>


    <?php
    $flag = false;
    if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        if (strlen($_POST['username']) > 0) {
            if (strlen($_POST['email']) > 0) {
                if (strlen($_POST['password']) > 0) {
                } else {
                    $errormessage = "password not set";
                    $flag = true;
                }
            } else {
                $errormessage = "email not set";
                $flag = true;
            }
        } else {
            $errormessage = "username not set";
            $flag = true;
        }

        if ($flag == false) {
            $secondflag = false;
            //insert into database
            $username = $_POST['username'];
            $email = $_POST['email'];
            $passworduser = $_POST['password'];

            $sql = "SELECT * FROM account WHERE name='$username'";
            if ($conn->query($sql)->num_rows > 0) {
                $errormessage = "Account with username " . $username . " already exists";
                $secondflag = true;
            } else {
                $sql = "SELECT * FROM account WHERE email='$email'";
                if ($conn->query($sql)->num_rows > 0) {
                    $errormessage = "Account with email " . $email . " already exists";
                    $secondflag = true;
                }
            }

            if ($flag == false && $secondflag == false) {
                $sql = "INSERT INTO account (name, level, email, password) VALUES ('$username', 'guest', '$email','$passworduser')";
                if ($conn->query($sql) === TRUE) {
                    $_SESSION['user'] = $username;
                    $cookie_name = 'cookie_user';
                    $cookie_value = $username;
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

                    echo '<script>
                    window.location = "' . $_SESSION['previous_page'] . '";
                    </script>';
                }

                exit;
            }
        }
    }
    ?>



    <div class="background">
        <div class="container-fluid">
            <div class="row form">
                <div class="col-4">
                    <div class="title">
                        welcome back!
                    </div>
                    <div class="subtitle">
                        please sign in if you already have an account
                    </div>
                    <div class="btn">
                        <button class="btn-base white"><a href="login.php">Sign In</a></button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="title">
                        create account
                    </div>
                    <div class="option">
                        <i class="fa-brands fa-facebook fa-2x"></i>
                        <i class="fa-brands fa-google-plus-g fa-2x"></i>
                        <i class="fa-brands fa-linkedin-in fa-2x"></i>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                        <div class="input-grp">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Userame" name="username" required>
                        </div>
                        <div class="input-grp">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-grp">
                            <i class="fa-solid fa-lock"></i>
                            <input type="password" placeholder="Password" name="password" required>
                        </div>

                        <div class="btn-grp">
                            <input class="btn-base" type="submit" value="SIGN UP">
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