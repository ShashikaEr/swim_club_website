<?php include('shared/user-management-header.php'); ?>
<?php $table_name = ['Non-staff','coach','admin'];?>
<?php include('shared/datatables.php'); ?>

<div class="tab-pane fade show active" id="nav-non-staff" role="tabpanel" aria-labelledby="nav-non-staff-tab" tabindex="0">

    <?php if($results):?>
        <table class="table table-hover table-striped table-bordered" id="Non-staff">
            <thead>
        <tr>
        <th>Forename</th>
        <th>Surname</th>
        <th>Username</th>
        <th>Telephone</th>
        <th>Address</th>
        <th>Postcode</th>
        <th>Email</th>
        <th>Gender</th>
        <th class="no-sort"></th>
        <th class="no-sort"></th>
        </tr>
            </thead>
            <tbody>
    <?php foreach ($results as $result):?>
            <?php if($result['role_id']!=1 && $result['role_id']!=2 ):?>
        <tr>
              <td><?php echo $result['forename'];?></td>
              <td><?php echo $result['surname'];?></td>
              <td><?php echo $result['username'];?></td>
              <td><?php echo $result['telephone'];?></td>
              <td><?php echo $result['address'];?></td>
              <td><?php echo $result['postcode'];?></td>
              <td><?php echo $result['email'];?></td>
              <td><?php echo $result['gender'];?></td>
            <td>
                <a href="">
                    <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
            </td>
            <td>
                <a href="">
                    <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
            </td>
          </tr>
<?php endif;?>
    <?php endforeach;?>
            </tbody>
        </table>
    <?php else:?>
    <p>No Users</p>
    <?php endif;?>

</div>

<div class="tab-pane fade" id="nav-coach" role="tabpanel" aria-labelledby="nav-coach-tab" tabindex="0">
    <a href="<?=ROOT?>/public/usermanagement/coachadd">
        <button class="btn btn-sm btn-primary">Add A New Coach</button>
    </a>
    <?php if($results):?>
        <table class="table table-hover table-striped table-bordered" id="coach">
            <thead>
            <tr>
                <th>Forename</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>Email</th>
                <th>Gender</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $result):?>
                <?php if($result['role_id']==2):?>
                    <tr>
                        <td><?php echo $result['forename'];?></td>
                        <td><?php echo $result['surname'];?></td>
                        <td><?php echo $result['username'];?></td>
                        <td><?php echo $result['telephone'];?></td>
                        <td><?php echo $result['address'];?></td>
                        <td><?php echo $result['postcode'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['gender'];?></td>
                        <td>
                            <a href="">
                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
                        </td>
                        <td>
                            <a href="">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                        </td>
                    </tr>
                <?php endif;?>
            <?php endforeach;?>
            </tbody>
        </table>
    <?php else:?>
        <p>No Users</p>
    <?php endif;?>

</div>
</div>
<div class="tab-pane fade" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab" tabindex="0"> <?php if($results):?>
        <a href="<?=ROOT?>/public/usermanagement/adminadd">
            <button class="btn btn-sm btn-primary">Add New Admin</button>
        </a>
        <table class="table table-hover table-striped table-bordered" id="admin">
            <thead>
            <tr>
                <th>Forename</th>
                <th>Surname</th>
                <th>Username</th>
                <th>Telephone</th>
                <th>Address</th>
                <th>Postcode</th>
                <th>Email</th>
                <th>Gender</th>
                <th class="no-sort"></th>
                <th class="no-sort"></th>
            </tr>
            </thead>
        <tbody>
            <?php foreach ($results as $result):?>
                <?php if($result['role_id']==1):?>
                    <tr>
                        <td><?php echo $result['forename'];?></td>
                        <td><?php echo $result['surname'];?></td>
                        <td><?php echo $result['username'];?></td>
                        <td><?php echo $result['telephone'];?></td>
                        <td><?php echo $result['address'];?></td>
                        <td><?php echo $result['postcode'];?></td>
                        <td><?php echo $result['email'];?></td>
                        <td><?php echo $result['gender'];?></td>
                        <td>
                            <a href="">
                                <button class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button></a>
                        </td>
                        <td>
                            <a href="">
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
                        </td>
                    </tr>
                <?php endif;?>
            <?php endforeach;?>
        </tbody>
        </table>
    <?php else:?>
        <p>No Users</p>
    <?php endif;?></div>
</div>
</section>
<?php include 'shared/footer.php' ?>
