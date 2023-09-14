<?php $page_title = 'Swimmers Performance';?>
<?php $table_name = ['performance'];?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>
<?php include('shared/datatables.php'); ?>

<section class="trainingdata">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2>Swimmers Performance</h2>
        </div>
        <div class="row">
            <div class="row">

           <div class="col-sm-6">
               <?php if($_SESSION['userrole']==1 || $_SESSION['userrole']==2) {?>
            <a href="<?=ROOT?>/public/trainingdata/adddata">
                <button class="btn btn-sm btn-primary float-start">Add New Data</button>
            </a>
               <?php }?>
           </div>

                <div class="col-md-6">
            <a href="<?=ROOT?>/public/trainingdata/compareswimmers">
                <button class="btn btn-sm btn-success float-end">Compare Swimmers</button>
            </a>
                </div>
            </div>
            <p><br></p>
            <hr/>
            <div class="row">
            <?php if($results):?>
                <table class="table table-hover table-striped table-bordered" width="100%" id="performance">
                    <thead>
                    <tr>

                        <th>Forename</th>
                        <th>Surname</th>
                        <th>Assigned Age Group</th>
                        <th>Stroke</th>
                        <th>Category</th>
                        <th>Timing</th>
                        <th>Training Date</th>
                        <th>Username</th>
                        <th class="no-sort">Select</th>
                        <th>Gender</th>
    <?php if($_SESSION['userrole']==1 || $_SESSION['userrole']==2) {?>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
    <?php } ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($results as $result):?>
                        <tr>

                            <td><?php echo $result['forename'];?></td>
                            <td><?php echo $result['surname'];?></td>
                            <td><?php echo $result['assigned_age_group'];?></td>
                            <td><?php echo $result['stroke_name'];?></td>
                            <td><?php echo $result['category'];?></td>
                            <td><?php echo $result['Timing'];?></td>
                            <td><?php echo $result['training_date'];?></td>
                            <td><?php echo $result['username'];?></td>
                            <td><input type="checkbox"></td>
                            <td><?php echo $result['gender'];?></td>
                         <?php if($_SESSION['userrole']==1 || $_SESSION['userrole']==2) {?>
                            <td>
                               <a href="<?=ROOT?>/public/trainingdata/editRecords/<?php echo u($result['performance_id']);?>">
                                    <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
                            </td>
                            <td>
                                <a href="<?=ROOT?>/public/trainingdata/deleteRecords/<?php echo u($result['performance_id']);?>">
                                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                            </td>
<?php } ?>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            <?php else:?>
                <p>No Performance Data</p>
            <?php endif;?>
            </div>
        </div>
    </div>
</section>
<?php include('shared/footer.php'); ?>