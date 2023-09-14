<?php $page_title = 'Comparison'; ?>
<?php include('shared/header.php'); ?>
<?php include('shared/navbarView.php'); ?>

<section class="comparison">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2>Swimmers Performance</h2>
        </div>
        <div class="row">
            <p>Category: <?php echo $_POST['category'];?></p>
            <p>Stroke: <?php if($_POST['category']="1"){
                echo "Freestyle";
                }elseif ($_POST['stroke_id']="4"){
                echo "Butterfly";
                }elseif ($_POST['stroke_id']="3"){
                echo "Backstroke";
                }elseif ($_POST['stroke_id']="5")
                echo "Breaststroke";

                ?></p>
        </div>
        <div class="row">
            <div class="col-sm-8 bg-light p-2">
                <table class="table table-hover table-striped table-bordered" id="gala_data" width="100%">

                <tr>
                <th></th>
                    <?php foreach ($results as $result):?>
                <th><?php echo $result['username']?></th>
                <?php endforeach;?>
                </tr>
                <tr>
                    <th>Personal best</th>
                        <?php foreach ($results as $result):?>
                            <td><?php echo $result['Timing']?></td>
                        <?php endforeach;?>
                    </tr>


            </table>

            </div>
        </div>
    </div>

</section>

<?php include('shared/footer.php'); ?>
