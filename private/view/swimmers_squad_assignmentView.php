<?php $page_title = 'Assign a Squad'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

<section class="squad">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2>Assign a Squad</h2>
        </div>
        <div class="row">
            <div class="col-sm-8 bg-light p-2">
                <form method="post">
                    <table class="table table-hover table-striped table-bordered">
            <form method="post">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>Swimmer Username:</th><td> <select id="user_id" class="form-select" name="user_id">
                                <option value="0">Choose...</option>
                                <?php if($results):?>
                                    <?php foreach ($results as $result):?>
                                            <option value="<?php echo $result['user_id'];?>"><?php echo $result['username'];?></option>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <option value="0">No swimmers to select</option>
                                <?php endif;?>
                            </select>
                        </td></tr>
                    <tr><th>Assigned Squad:</th><td> <select id="squad_id" class="form-select" name="squad_id">
                                <option value="0">Choose...</option>
                                <?php if($sqddetails):?>
                                    <?php foreach ($sqddetails as $sqddetails):?>
                                        <option value="<?php echo $sqddetails['squad_id'];?>"><?php echo $sqddetails['squad_name'];?></option>
                                    <?php endforeach;?>
                                <?php else:?>
                                    <option value="0">No squads to select</option>
                                <?php endif;?>
                            </select>
                        </td></tr>
                </table>
                <a href="squadmanagement/swimmerassquadAssignment">
                    <button class="btn btn-sm btn-primary">Add New Squad</button>
                </a>
            </form>
        </div>

    </div>
    </div>
</section>
<?php include('shared/footer.php'); ?>