<?php $page_title = 'Compare Swimmers'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="compareswimmers">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Compare Swimmer Performance</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered">
                            <tr><th>User Name:</th><td>
                                    <select id="user_id" class="form-select" multiple name="user_id[]">
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
                        <a href="compareswimmers">
                            <button type="submit" class="btn btn-primary">Compare</button>
                        </a>
                    </form>

                </div>
            </div>
        </div>

    </section>

<?php include('shared/footer.php'); ?>