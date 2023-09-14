<?php $page_title = 'DashBoard'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

<section class="dashboard">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="row justify-content-center">

            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> Gala Events Management </div>
                <li class="fa fa-list" style="font-size: 100px;"></li>
                <div class="card-footer">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="galaManagement">Go to.</a> </li>

                    </ul>
                </div>
            </div>

<?php if($_SESSION['userrole']==1){ ?>

            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> Users management </div>
                <li class="fa fa-user" style="font-size: 100px;"></li>
                <div class="card-footer">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="usermanagement">Go to.</a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> Membership management </div>
                <li class="fa fa-lock" style="font-size: 100px;"></li>
                <div class="card-footer">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="">Go to.</a> </li>

                    </ul>
                </div>
            </div>
    <?php }?>
            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> Training Performance</div>
                <li class="fa fa-list" style="font-size: 100px;"></li>
                <div class="card-footer">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="trainingdata">Go to.</a> </li>

                    </ul>
                </div>
            </div>
            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> FAQ</div>
                <li class="fa fa-question" style="font-size: 100px;"></li>
                <div class="card-footer">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="">Go to.</a> </li>

                    </ul>
                </div>
            </div>
            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> Upcoming Events</div>
                <li class="fa fa-info" style="font-size: 100px;"></li>
                <h1><i class="fa-solid fa-user-group"></i></h1>
                <div class="card-footer">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="">Go to.</a> </li>

                    </ul>
                </div>
            </div>
<?php if($_SESSION['userrole']==1 OR $_SESSION['userrole']==2){ ?>
            <div class="col-3 rounded m-3 border p-0 text-center">
                <div class="card-header text-center"> Squad management </div>
                <li class="fa fa-users" style="font-size: 100px;"></li>
                <div class="card-footer">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="squadmanagement">Go to.</a> </li>

                    </ul>
                </div>
            </div>

        </div>
    </div>
    <?php }?>
</section>

<?php include('shared/footer.php'); ?>