<?php $page_title = 'Add Coach'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>
<section class="profile">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Add New Coach</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                   <form method="post">
                    <table class="table table-hover table-striped table-bordered">
                        <tr><th>Username:</th><td> <input type="text" class="form-control" name="username" placeholder="Username"></td></tr>
                        <tr><th>Password:</th><td> <input type="password" class="form-control" name="password" placeholder="Password"></td></tr>
                        <tr><th>Re-type Password:</th><td> <input type="password" class="form-control" name="confirmPassword" placeholder="Re-type Password"></td></tr>
                    </table>
                       <a href="coachadd">
                       <button type="submit" class="btn btn-primary">Add</button>
                       </a>
                   </form>
                </div>

            </div>
        </div>
    </section>
<?php include('shared/footer.php'); ?>