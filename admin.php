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
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>DashBoard</title>
</head>

<body>
    <div class="container-fluid">
        <div class="dashboard">
            <div class="title">
                dashboard
            </div>
            <div class="profile">
                <a href="index.php">Go Back</a>
            </div>
        </div>
    </div>




    <div class="container-fluid">
        <div class="dashboard-wrapper">
            <div class="product-wrapper">
                <div class="title">
                    Orders
                </div>
                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Full Name</th>
                                <th scope="col">Tier</th>
                                <th scope="col">Price</th>
                                <th scope="col">Address</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM myorder";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <th>" . $row['full_name'] . "</th>
                                            <td>" . $row['tier'] . "</td>
                                            <td>" . $row['price'] . "</td>
                                            <td>" . $row['address'] . "</td>
                                            <td>" . $row['status'] . "</td>
                                            <td>
                                            <a href='confirm.php?id=" . $row['id'] . "'><button><i class='fa-solid fa-check'></i></button></a>
                                            <a href='delete.php?id=" . $row['id'] . "'><button class='del'><i class='fa-solid fa-trash'></i></button></a>
                                            </td>
                                        </tr>";
                                }
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="dashboard-wrapper">
            <div class="product-wrapper">
                <div class="title">
                    Account
                </div>
                <div class="table-wrapper">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Account Level</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sql = "SELECT * FROM account";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr>
                                            <th>" . $row['name'] . "</th>
                                            <td>" . $row['email'] . "</td>
                                            <td>" . $row['level'] . "</td>
                                            <td>";
                                    if ($row['level'] == "guest") {
                                        echo " <a href='promote.php?id=" . $row['id'] . "'><button class='promote'>Promote</button></a>";
                                        echo "<a href='deleteA.php?id=" . $row['id'] . "'><button class='del'><i class='fa-solid fa-trash'></i></button></a>
                                        </td>
                                    </tr>";
                                    } else {

                                        echo " <a href='demote.php?id=" . $row['id'] . "'><button class='demote'>demote</button></a>";
                                        echo "<a href='deleteA.php?id=" . $row['id'] . "'><button class='del'><i class='fa-solid fa-trash'></i></button></a>
                                            </td>
                                        </tr>";
                                    }
                                }
                            }

                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




</body>

</html>
<?php
ob_end_flush();
?>