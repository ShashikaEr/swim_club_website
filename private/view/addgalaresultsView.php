<?php $page_title = 'Add Results'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="gala">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Add a New Result</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered">
                            <tr><th>Event Name:</th><td>
                                    <select id="event_id" class="form-select" name="event_id">
                                        <option value="0">Choose...</option>
                                        <?php if($results):?>
                                            <?php foreach ($results as $result):?>
                                                <option value="<?php echo $result['event_id'];?>"><?php echo $result['event_name'];?></option>
                                            <?php endforeach;?>
                                        <?php else:?>
                                            <p>No Events</p>
                                        <?php endif;?>
                                    </select>
                                </td></tr>
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
                            <tr><th>Position/ Achievement:</th><td> <input type="text" class="form-control" name="achievement" placeholder="Position/ Acievement"></td></tr>
                            <tr><th>Timing:</th><td> <input type="text" class="form-control" name="timing" pattern="\d{2}:\d{2}:\d{2}.\d{3}" placeholder="hh:mm:ss.sss"></td></tr>
                            <tr><th>Category:</th><td> <input type="text" class="form-control" name="category" placeholder="Category"></td></tr>
                            <tr><th>Stroke:</th><td> <select id="stroke_id" class="form-select" name="stroke_id">
                                        <option value="0">Choose...</option>
                                        <option value="1">Freestyle</option>
                                        <option value="4">Butterfly</option>
                                        <option value="3">Backstroke</option>
                                        <option value="5">Breaststroke</option>
                                    </select></td></tr>

                        </table>
                        <a href="addgalaresults">
                            <button type="submit" class="btn btn-primary">Add Result</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </section>

<?php include('shared/footer.php'); ?>