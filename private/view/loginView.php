<?php $page_title = 'Login'; ?>
<?php include('shared/header.php'); ?>

<section class="login py-5 bg-light">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-5">
                <img src="<?=ROOT?>/private/images/login-image.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-7 text-center">
                <h1>Welcome Back</h1>
            <form method="post">
             <div class="form-row py-3 pt-5">
                 <div class="offset-1 col-lg-10">
                     <input type="text" class="form-control" name="username" placeholder="UserName">
                 </div>
             </div>
                <div class="form-row">
                    <div class="offset-1 col-lg-10">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="offset-1 col-lg-10 py-3">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </form>
                <p> New to our club? <a href="signup">Register</a> </p>
            </div>
        </div>
    </div>
</section>

<?php include 'shared/footer.php' ?>