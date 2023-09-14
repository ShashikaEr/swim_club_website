<?php $page_title = 'Add Squad'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

    <section class="squad">
        <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
            <div class="text-center">
                <h2>Add New Squad</h2>
            </div>
            <div class="row">
                <div class="col-sm-8 bg-light p-2">
                    <form method="post">
                        <table class="table table-hover table-striped table-bordered">
                            <tr><th>Squad Name:</th><td> <input type="text" class="form-control" name="squad_name" placeholder="Squad Name"></td></tr>
                            <tr><th>Assigned Coach:</th><td>
                                    <select id="coach_id" class="form-select" name="coach_id">
                                        <option value="0">Choose...</option>
                                        <?php if($results):?>
                                        <?php foreach ($results as $result):?>
                                            <?php if($result['role_id']==2):?>
                                        <option value="<?php echo $result['user_id'];?>"><?php echo $result['username'];?></option>
                                            <?php endif;?>
                                        <?php endforeach;?>
                        <?php else:?>
                            <p>No Coach</p>
                        <?php endif;?>
                                    </select>
                                    <script>
                                        $(document).ready(function() {
                                            $('.form-select').select2();
                                        });
                                    </script>
                                </td></tr>

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