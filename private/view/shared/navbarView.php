<?php if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}?>
<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="<?=ROOT?>/private/images/logo.png" class="rounded-circle" style="width: 50px"> ST SWIMMING
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Training Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
<?php if(isset($username)) { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?=ROOT?>/private/images/default_profile.jpg" class="border border-primary rounded-circle" style="width: 30px"> <?php echo $username; ?>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?=ROOT?>/public/profile">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="<?=ROOT?>/public/dashboard">DashBoard</a></li>
                        <li><div class="dropdown-divider"></div></li>
                        <li><a class="dropdown-item" href="<?=ROOT?>/public/logout">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <?php } else {
    ?>
    <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="login">Login</a>
        </li>
    </ul>
           <?php }?>
        </div>
    </div>
</nav>
</div>