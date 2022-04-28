<?php
if (!isset($_SESSION)) {
    session_start();
}
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>APIhub</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                <?php
if (@$_SESSION['logged_in'] == TRUE):
?>    


                <a class="navbar-brand" href="index.php">Hi <?php echo $_SESSION['user_name']; ?> , Welcome to APIhub</a>
                <?php
elseif (@$_SESSION['logged_in'] == FALSE):
?>
                 <a class="navbar-brand" href="index.php">APIhub</a>
                 <?php
endif;
?>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="guide-directory.php">Guides</a></li>
                            <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a></li>
                            <li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
                          
                            <?php
if (@$_SESSION['type'] == "Pro"):
?>

                            <li class="nav-item"><a class="nav-link" href="UserPage.php">User</a></li>

                         


<?php
elseif (@$_SESSION['type'] == "Basic"):
?>
                                <li class="nav-item"><a class="nav-link" href="free_users.php">User</a></li>

                              <?php
endif;
?>



<?php
if (@$_SESSION['logged_in'] == TRUE):
?>
                            <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                            <?php
elseif (@$_SESSION['logged_in'] == FALSE):
?>
                              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                              <?php
endif;
?>
                        </ul>
                    </div>
                </div>
            </nav>
