<?php include('shared/squadmanagement-header.php'); ?>

<?php if($_SESSION['userrole']==2){ ?>
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
    <br>
    <p>My Squad: </p>
    <?php if($results2):?>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Swimmer username</th>
                <th>Swimmer Forename</th>

            </tr>
            <?php foreach ($results2 as $result):?>
            <?php if($result['coach_id']==$_SESSION['user_id']):?>
                <tr>
                    <td><?php echo $result['username'];?></td>
                    <td><?php echo $result['forename'];?></td>

                </tr>
            <?php endif;?>
            <?php endforeach;?>
        </table>
    <?php else:?>
        <p>No Users</p>
    <?php endif;?>
</div>
<?php }?>
<?php if($_SESSION['userrole']==1){ ?>
<div class="tab-pane fade" id="nav-add-new-squad" role="tabpanel" aria-labelledby="nav-add-new-squad-tab" tabindex="0">
     <a href="<?=ROOT?>/public/squadmanagement/squadadd">
        <button class="btn btn-sm btn-primary">Add New Squad</button>
     </a>
    <?php if($results):?>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Squad Name</th>
                <th>Assigned Coach User Name</th>
                <th>Assigned Coach Forename</th>

            </tr>
            <?php foreach ($results as $result):?>
                   <tr>
                        <td><?php echo $result['squad_name'];?></td>
                        <td><?php echo $result['username'];?></td>
                        <td><?php echo $result['forename'];?></td>

                    </tr>
                <?php endforeach;?>
        </table>
    <?php else:?>
        <p>No Users</p>
    <?php endif;?>
</div>
<?php }?>
<div class="tab-pane fade" id="nav-swimmer-squads" role="tabpanel" aria-labelledby="nav-swimmer-squads-tab" tabindex="0">
    <a href="<?=ROOT?>/public/squadmanagement/swimmerassquadAssignment">
        <button class="btn btn-sm btn-primary">Assign Squad</button>
    </a>

    <?php if($results2):?>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Squad Name</th>
                <th>Swimmer Username</th>
                <th>Swimmer Forename</th>

            </tr>
            <?php foreach ($results2 as $result2):?>
                <tr>
                    <td><?php echo $result2['squad_name'];?></td>
                    <td><?php echo $result2['username'];?></td>
                    <td><?php echo $result2['forename'];?></td>

                </tr>
            <?php endforeach;?>
        </table>
    <?php else:?>
        <p>No Users</p>
    <?php endif;?>
</div>
</section>
<?php include 'shared/footer.php' ?>
