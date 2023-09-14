<?php $page_title = 'SignUp'; ?>
<?php include('shared/header.php'); ?>

    <section class="register py-5 bg-light">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12 text-center">
                    <h1>Register</h1>
                </div>

                <form class="row g-3" method="post">
                    <?php
                    if($errors):?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>
                        <?php foreach($errors as $error):?>
                        <li><?php echo $error ?></li>
                        <?php endforeach;?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php endif; ?>
                    <div class="col-md-6">
                        <label for="forename" class="form-label">Forename</label>
                        <input type="text" class="form-control" id="forename" name="forename" required>
                    </div>
                    <div class="col-md-6">
                        <label for="surname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="surname" name="surname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-md-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" title="Password Length min 8 characters with special character and alphanumeric characters" required>
                    </div>
                    <div class="col-md-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <div class="col-md-4">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="col-md-4">
                        <label for="dob" class="form-label">Birthday</label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    <div class="col-md-3">
                        <label for="gender" class="form-label">Gender</label>
                        <select id="gender" class="form-select" name="gender">
                            <option value="0">Choose...</option>
                            <option value="m">Male</option>
                            <option value="f">Female</option>
                            <option value="o">Other</option>
                        </select>
                    </div>
                    <div class="col-9">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="123, Ab Street, Stoke on Trent" required>
                    </div>
                    <div class="col-md-3">
                        <label for="postCode" class="form-label">Post Code</label>
                        <input type="text" class="form-control" id="postCode" placeholder="xxx xxx" name="postcode" required>
                    </div>
                    <div class="col-md-3">
                        <label for="telephone" class="form-label">Mobile Number</label>
                        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Mobile number with 11 digits" required maxlength="11">
                    </div>

                    <div class="col-md-3">
                        <label for="role" class="form-label">Role</label>
                        <select id="role" class="form-select" name="role">
                            <option value="0">Choose...</option>
                            <option value="3">Parent</option>
                            <option value="4">Adult Swimmer</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="profilePic" class="form-label">Upload a Profile Picture</label>
                        <input class="form-control" type="file" id="profilePic" name="profilePic">
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn btn-danger">Cancel</button>
                    </div>
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                </form>
                <p>Have an account? <a href="login">Login</a> </p>
            </div>
        </div>
    </section>



<?php include 'shared/footer.php' ?>