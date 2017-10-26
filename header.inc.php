<?php
//echo $_SERVER['REQUEST_URI'];
//var_dump(parse_url($_SERVER['REQUEST_URI']));
if($_SERVER['REQUEST_URI'] == '/' OR $_SERVER['REQUEST_URI'] == '/index.php') {
?>

    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.php" class="logo"></a>
						<span class="sr-only">startup.ly</span>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navigation-navbar">
                    <ul class="navigation-bar navigation-bar-left">
                        <li class="active"><a href="#hero">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#register">Register</a></li>
                        <li><a href="#footer">Contacts</a></li>
                    </ul>

                    <ul class="navigation-bar navigation-bar-right">
                                        <?php
                    if ($_COOKIE['logged_user'] == '') {
						echo '<li class="featured"><a href="register.php">Sign Up</a></li>';
                    } else {
						echo '<li class="menu-item"><a href="#">Welcome '.USER_NAME.'</a></li>';
                    }
                    ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php
} else {
?>
    <header>
        <nav class="navigation navigation-header">
            <div class="container">
                <div class="navigation-brand">
                    <div class="brand-logo">
						<a href="index.php" class="logo"></a>
						<span class="sr-only">startup.ly</span>
                    </div>
                    <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown" data-target=".navigation-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navigation-navbar">
                    <ul class="navigation-bar navigation-bar-left">
                        <li><a href="index.php">Back to Home</a></li>
                    </ul>

                    <ul class="navigation-bar navigation-bar-right">
                      <!--LOGIN-->
                                        <?php
                                        //echo $USER_EXISTS;echo $_COOKIE['logged_user'];
                    if ($_COOKIE['logged_user'] == '') {
						echo '<li class="featured"><a href="register.php">Sign Up</a></li>';
                    } else {
						echo '<li class="menu-item"><a href="#">Welcome '.USER_NAME.'</a></li>';
                    }
                    ?>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
<?php
}
?>






<!--
COOKIES
https://gist.github.com/joseramoncajide/3003c75149743c430bf234701a6dddbc
-->
