<?php $page_title = 'Edit Event'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="gala">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Edit Gala Event</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered">


                            <tr><th>Event Name:</th><td> <input type="text" class="form-control" name="event_name" value="<?php echo $result1['event_name'];?>" required></td></tr>
                            <tr><th>Location:</th><td> <input type="text" class="form-control" name="location" value="<?php echo $result1['location'];?>" required></td></tr>
                            <tr><th>Event Date:</th><td> <input type="datetime-local" class="form-control" name="event_date" value="<?php echo $result1['event_date'];?>" required></td></tr>
                            <tr><th>Description:</th><td> <input type="text" class="form-control" name="description" value="<?php echo $result1['description'];?>" required></td></tr>
                            <tr><th>Organized by:</th><td> <input type="text" class="form-control" name="organizedby" value="<?php echo $result1['organizedby'];?>" required></td></tr>
                            <tr><th>Contact Number:</th><td> <input type="text" class="form-control" name="contact_number" value="<?php echo $result1['contact_number'];?>" required></td></tr>

                        </table>
                        <a href="addgalaevent">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </section>

<?php include('shared/footer.php'); ?>