<?php $page_title = 'Add Training Data'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="addtraining">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Add a New Record</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered">
                            <tr><th>User Name:</th><td>
                                    <select id="user_id" class="form-select" name="user_id">
                                        <option value="0">Choose...</option>
                                        <?php if($usrdetails):?>
                                            <?php foreach ($usrdetails as $usrdetails):?>
                                                <option value="<?php echo $usrdetails['user_id'];?>"><?php echo $usrdetails['username'];?></option>
                                            <?php endforeach;?>
                                        <?php else:?>
                                            <p>No Swimmers</p>
                                        <?php endif;?>
                                    </select>
                                </td></tr>
                            <tr><th>Timing:</th><td> <input type="text" class="form-control" name="timing" pattern="\d{2}:\d{2}:\d{2}.\d{3}" placeholder="hh:mm:ss.sss"></td></tr>
                            <tr><th>Training Date:</th><td> <input type="date" class="form-control" name="training_date"></td></tr>
                            <tr><th>Age Group:</th><td> <select id="age_group" class="form-select" name="age_group">
                                        <option value="0">Choose...</option>
                                        <option value="9/U">9/U</option>
                                        <option value="11/U">11/U</option>
                                        <option value="16/U">16/U</option>
                                        <option value="21/U">21/U</option>
                                        <option value="Open">Open</option>
                                    </select></td></tr>
                            <tr><th>Stroke:</th><td> <select id="stroke_id" class="form-select" name="stroke_id">
                                        <option value="0">Choose...</option>
                                        <option value="1">Freestyle</option>
                                        <option value="4">Butterfly</option>
                                        <option value="3">Backstroke</option>
                                        <option value="5">Breaststroke</option>
                                    </select></td></tr>
                            <tr><th>Category:</th><td> <select id="category" class="form-select" name="category">
                                        <option value="0">Choose...</option>
                                        <option value="50m">50m</option>
                                        <option value="100m">100m</option>
                                        <option value="200m">200m</option>
                                        <option value="4*100m">4*100m</option>
                                    </select></td></tr>

                        </table>
                        <a href="adddata">
                            <button type="submit" class="btn btn-primary">Add Result</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </section>

<?php include('shared/footer.php'); ?>