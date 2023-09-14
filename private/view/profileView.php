<?php $page_title = 'Profile'; ?>
<?php include('shared/header.php'); ?>
<?php $username = $results['username']; ?>
<?php include('shared/navbarView.php'); ?>
<section class="profile" xmlns="">
<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
   <div class="text-center">
       <h2><?php echo $results['username'];?></h2>
   </div>
    <div class="row">
       <div class="col-sm-4">
           <img src="<?=ROOT?>/private/images/default_profile.jpg" class="d-block max-auto rounded-circule" style="width: 100px;">
       </div>
       <div class="col-sm-8 bg-light p-2">
           <form>
           <table class="table table-hover table-striped table-bordered">
               <tr><th>Forename:</th><td><input type='text' name='forename' style='border:none;background:transparent' id='forename' value='<?php echo $results['forename'];?>' disabled/></td></tr>
               <tr><th>Surname:</th><td><input type='text' name='surname' style='border:none;background:transparent' id='surname' value='<?php echo $results['surname'];?>' disabled/></td></tr>
               <tr><th>Telephone:</th><td><input type='text' name='telephone' style='border:none;background:transparent' id='telephone' value='<?php echo $results['telephone'];?>' disabled/></td></tr>
               <tr><th>Address:</th><td><input type='text' name='address' style='border:none;background:transparent' id='address' value='<?php echo $results['address'];?>' disabled/></td></tr>
               <tr><th>Post Code:</th><td><input type='text' name='postcode' style='border:none;background:transparent' id='postcode' value='<?php echo $results['postcode'];?>' disabled/></td></tr>
               <tr><th>Email:</th><td><input type='text' name='email' style='border:none;background:transparent' id='email' value='<?php echo $results['email'];?>' disabled/></td></tr>
           </table>
           </form>
       </div>
   </div>
    <div class="row">
<?php if($_SESSION['userrole']!=5){?>
        <div class="col-md-3 col-lg-4 m-lg-auto">
            <buton id ="edit" class="btn btn-primary">Edit</buton>
            <a href="<?=ROOT?>/public/profile/editProfile/<?php echo u($results['user_id']);?>"><buton id ="save" class="btn btn-primary" style="display: none">Save</buton></a>
            <?php if($_SESSION['userrole']==3){?>
            <a href="<?=ROOT?>/public/usermanagement/childadd"><buton class="btn btn-primary">Add Children</buton></a>
    <?php } ?>

            <script>
                document.getElementById("edit").addEventListener("click", function() {
                    document.getElementById("forename").disabled = false;
                    document.getElementById("surname").disabled = false;
                    document.getElementById("telephone").disabled = false;
                    document.getElementById("address").disabled = false;
                    document.getElementById("postcode").disabled = false;
                    document.getElementById("save").style.display = "inline-block";
                });

            </script>
        </div>
<?php } ?>
    </div>
</div>

<?php if($_SESSION['userrole']==3){?>

        <?php foreach ($results2 as $results2): ?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
    <h5>Children Details</h5>
    </div>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2><?php echo $results2['username'];?></h2>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="<?=ROOT?>/private/images/default_profile.jpg" class="d-block max-auto rounded-circule" style="width: 100px;">
            </div>
            <div class="col-sm-8 bg-light p-2">
                <table class="table table-hover table-striped table-bordered">
                    <tr><th>Forename:</th><td><input type='text' name='forename' style='border:none;background:transparent' id='forename' value='<?php echo $results2['forename'];?>' disabled/></td></tr>
                    <tr><th>Surname:</th><td><input type='text' name='surname' style='border:none;background:transparent' id='surname' value='<?php echo $results2['surname'];?>' disabled/></td></tr>
                    <tr><th>Telephone:</th><td><input type='text' name='telephone' style='border:none;background:transparent' id='telephone' value='<?php echo $results2['telephone'];?>' disabled/></td></tr>
                    <tr><th>Address:</th><td><input type='text' name='address' style='border:none;background:transparent' id='address' value='<?php echo $results2['address'];?>' disabled/></td></tr>
                    <tr><th>Post Code:</th><td><input type='text' name='postcode' style='border:none;background:transparent' id='postcode' value='<?php echo $results2['postcode'];?>' disabled/></td></tr>
                    <tr><th>Email:</th><td><input type='text' name='email' style='border:none;background:transparent' id='email' value='<?php echo $results2['email'];?>' disabled/></td></tr>
                </table>
            </div>
        </div>
        <div class="row">
                <div class="col-md-3 col-lg-4 m-lg-auto">
                    <a href=""><buton id ="edit" class="btn btn-primary">Edit</buton></a>
                </div>
        </div>
    </div>
    <?php  endforeach; ?>
<?php }?>

</section>
<?php include('shared/footer.php'); ?>