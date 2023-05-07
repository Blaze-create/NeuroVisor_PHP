<?php
//check user session and cookies
if (!isset($_SESSION['user'])) {
    if (isset($_COOKIE["cookie_user"])) {
        $cookiename = $_COOKIE["cookie_user"];
        $sql = "select * from account where name='$cookiename'";
        $cookieresult = $conn->query($sql);
        if ($cookieresult->num_rows > 0) {
            while ($row = $cookieresult->fetch_assoc()) {
                $_SESSION['user'] = $row['name'];
                $_SESSION['level'] = $row['level'];
            }
        }
    }
}

$links = array(
    array("Home", "index.php"),
    array("Shop", "shop.php"),
    array('Our Teams', "team.php")

);


echo '    <nav class="mynav mycollapse" id="navbar">
<input type="checkbox" id="check">
<label for="check" class="checkbtn">
    <i class="fas fa-bars"></i>
</label>
<div class="label">
    <h3><a href="index.php"><span>Neuro</span>Visor_</a></h3>
</div>

<ul>';



foreach ($links as $link) {
    if ($page_name == $link[1] || ($page_name == "" && $link[1] == "index.php")) {
        echo '<li class="active"><a href="' . $link[1] . '">' . $link[0] . '</a></li>';
    } else {
        echo '<li><a href="' . $link[1] . '">' . $link[0] . '</a></li>';
    }
}

if (isset($_SESSION['user'])) {
    // echo '<li><a href="#">' . $_SESSION['user'] . '</a></li>';
    // echo '<li><a href="logout.php">LogOut</a></li>';
    echo '<div class="dropdown" id="dropdown_menu">
        <button class="dropbtn" id="user_nav">' . $_SESSION['user'] . '</i></button>
        <div class="dropdown-content" id="user_dropdown">
        <a href="logout.php" id="logout_btn"><i class="fa-solid fa-right-from-bracket"></i>Log Out</a>';


    if (isset($_SESSION['level']) && $_SESSION['level'] == "admin") {
        echo '<a href="admin.php" id="logout_btn"><i class="fa-solid fa-lock"></i>Admin</a>';
    }



    echo '
        </div>
        </div>';
} else {
    echo ' <li><button><a href="register.php">Sign up</a></button></li>';
}





echo '        </ul>
</nav>
';
