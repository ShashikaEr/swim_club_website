<?php $page_title = 'Gala Events Management';?>
<?php $table_name = ['gala_data','gala_data2'];?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>
<?php include('shared/datatables.php'); ?>


<section class="galamanagement">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2>Gala Event Management</h2>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-add-new-gala-tab" data-bs-toggle="tab" data-bs-target="#nav-add-new-gala" type="button" role="tab" aria-controls="nav-add-new-gala" aria-selected="false">Gala Events</button>
                <button class="nav-link" id="nav-gala-results-tab" data-bs-toggle="tab" data-bs-target="#nav-gala-results" type="button" role="tab" aria-controls="nav-gala-results" aria-selected="false" >Manage Gala Results</button>
            </div>
        </nav>
        <script>
            $(document).ready(function(){
                $(".nav-link").click(function(){
                    if (!$(this).hasClass("active")) {
                        $(".nav-link").removeClass("active");
                        $(this).addClass("active");

                    }
                });

            });
        </script>

        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-add-new-gala" role="tabpanel" aria-labelledby="nav-add-new-gala-tab" tabindex="0">
            <?php if($_SESSION['userrole']==1) {?>
                    <a href="<?=ROOT?>/public/galamanagement/addgalaevent">
                        <button class="btn btn-sm btn-primary">Add New Gala Event</button>
                    </a>
            <?php } ?>
            <?php if($results):?>
                        <table class="table table-hover table-striped table-bordered" id="gala_data" width="100%">
                            <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Location</th>
                                <th>Event Date</th>
                                <th>Description</th>
                                <th>Organized by</th>
                                <th>Contact Number</th>
                                <?php if($_SESSION['userrole']==1) {?>
                                <th class="no-sort"></th>
                                <th class="no-sort"></th>
                            <?php }?>

                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($results as $result):?>
                                <tr>
                                    <td><?php echo $result['event_name'];?></td>
                                    <td><?php echo $result['location'];?></td>
                                    <td><?php echo $result['event_date'];?></td>
                                    <td><?php echo $result['description'];?></td>
                                    <td><?php echo $result['organizedby'];?></td>
                                    <td><?php echo $result['contact_number'];?></td>
                                    <?php if($_SESSION['userrole']==1) {?>
                                <td>
                                    <a href="<?=ROOT?>/public/galamanagement/editgalaevent/<?php echo u($result['event_id']);?>">
                                    <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
                                </td>
                                <td>
                                    <a href="<?=ROOT?>/public/galamanagement/deletegalaevent/<?php echo u($result['event_id']);?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>

                                </td>
                        <?php } ?>
                                </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    <?php else:?>
                        <p>No Events</p>
                    <?php endif;?>
                </div>

            <div class="tab-pane fade active" id="nav-gala-results" role="tabpanel" aria-labelledby="nav-gala-results-tab" tabindex="0">
                <?php if($_SESSION['userrole']==1) {?>
                <a href="<?=ROOT?>/public/galamanagement/addgalaresults">
                    <button class="btn btn-sm btn-primary">Add Gala Results</button>
                </a>
            <?php } ?>
                <?php if($results2):?>
                    <table class="table table-hover table-striped table-bordered" id="gala_data2">
                       <thead>
                        <tr>
                            <th>Event Name</th>
                            <th>Swimmer Username</th>
                            <th>Swimmer Forename</th>
                            <th>Position/Achievement</th>
                            <th>Stroke</th>
                            <th>Category</th>
                            <?php if($_SESSION['userrole']==1) {?>
                            <th class="no-sort"></th>
                            <th class="no-sort"></th>
<?php }?>
                        </tr>
                       </thead>
                        <tbody>
                        <?php foreach ($results2 as $result2):?>
                            <tr>
                                <td><?php echo $result2['event_name'];?></td>
                                <td><?php echo $result2['username'];?></td>
                                <td><?php echo $result2['forename'];?></td>
                                <td><?php echo $result2['achievement'];?></td>
                                <td><?php echo $result2['stroke_name'];?></td>
                                <td><?php echo $result2['category'];?></td>
                                <?php if($_SESSION['userrole']==1) {?>
                                <td>
                                    <a href="<?=ROOT?>/public/galamanagement/editresult/<?php echo u($result2['result_id']);?>">
                                        <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
                                </td>
                                <td>
                                    <a href="<?=ROOT?>/public/galamanagement/deleteresult/<?php echo u($result2['result_id']);?>">
                                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                                </td>
                                <?php } ?>
                            </tr>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                <?php else:?>
                    <p>No Results</p>
                <?php endif;?>
            </div>

        <?php include 'shared/footer.php' ?>
