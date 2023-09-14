<?php $page_title = 'Add Event'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="gala">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Add a New Gala Event</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered">
                            <tr><th>Event Name:</th><td> <input type="text" class="form-control" name="event_name" placeholder="Event Name"></td></tr>
                            <tr><th>Location:</th><td> <input type="text" class="form-control" name="location" placeholder="Location"></td></tr>
                            <tr><th>Event Date:</th><td> <input type="datetime-local" class="form-control" name="event_date"></td></tr>
                            <tr><th>Description:</th><td> <input type="text" class="form-control" name="description" placeholder="Description"></td></tr>
                            <tr><th>Organized by:</th><td> <input type="text" class="form-control" name="organizedby" placeholder="Organized by"></td></tr>
                            <tr><th>Contact Number:</th><td> <input type="text" class="form-control" name="contact_number" placeholder="Contact Number"></td></tr>

                        </table>
                        <a href="addgalaevent">
                            <button type="submit" class="btn btn-primary">Add Event</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </section>

<?php include('shared/footer.php'); ?>