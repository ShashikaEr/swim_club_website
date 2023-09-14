<?php $page_title = 'Add a Child'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="childadd">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Add a Child</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
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
                        <table class="table table-hover table-striped table-bordered">
                            <tr>
                                <th>Forename<th>
                                <td><input type="text" class="form-control" id="forename" name="forename" required></td>
                            </tr>
                            <tr>
                                <th>Surname<th>
                                <td><input type="text" class="form-control" id="surname" name="surname" required></td>
                            </tr>
                            <tr>
                                <th>Email<th>
                                <td><input type="email" class="form-control" id="email" name="email" required></td>
                            </tr>
                            <tr>
                                <th>Password<th>
                                <td><input type="password" class="form-control" id="password" name="password" required></td>
                            </tr>
                            <tr>
                                <th>Re-type Password<th>
                                <td><input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required></td>
                            </tr>
                            <tr>
                                <th>Username<th>
                                <td><input type="text" class="form-control" id="username" name="username" required></td>
                            </tr>
                            <tr>
                                <th>Birthday<th>
                                <td><input type="date" class="form-control" id="dob" name="dob" required></td>
                            </tr>
                            <tr>
                                <th>Gender<th>
                                <td><select id="gender" class="form-select" name="gender">
                                        <option value="0">Choose...</option>
                                        <option value="m">Male</option>
                                        <option value="f">Female</option>
                                        <option value="o">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Address<th>
                                <td>
                            <input type="text" class="form-control" id="address" name="address" placeholder="123, Ab Street, Stoke on Trent">
                                </td>
                            </tr>
                            <th>Postcode<th>
                            <td>
                            <input type="text" class="form-control" id="postCode" placeholder="xxx xxx" name="postcode">
                            </td>
                            </tr>
                            <th>Mobile Number<th>
                            <td>
                            <input type="text" class="form-control" id="telephone" name="telephone">
                            </td>
                            </tr>
                            <th>Profile Picture<th>
                            <td>
                            <input class="form-control" type="file" id="profilePic" name="profilePic">
                            </td>
                            </tr>

                </table>

                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <a href="<?=ROOT?>/public/usermanagement/childadd"><button type="submit" class="btn btn-primary">Add Child</button></a>
                </div>
                </form>
                <div class="col-md-6">
                    <a href="<?=ROOT?>/public/profile"><button class="btn btn-danger">Cancel</button></a>
                </div>
        </div>

    </section>

<?php include('shared/footer.php'); ?>