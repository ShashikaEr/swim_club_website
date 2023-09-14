<?php $page_title = 'Squad Management';?>
<?php include('header.php'); ?>
<?php include('navbarView.php'); ?>

<section class="squadmanagement">
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px";>
        <div class="text-center">
            <h2>Squad Management</h2>
        </div>

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <?php if($_SESSION['userrole']==2){ ?>
             <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" href="" role="tab" aria-controls="nav-home" aria-selected="true">Manage my squad</button><?php }?>
                <?php if($_SESSION['userrole']==1){ ?>
                <button class="nav-link" id="nav-add-new-squad-tab" data-bs-toggle="tab" data-bs-target="#nav-add-new-squad" type="button" role="tab" aria-controls="nav-add-new-squad" aria-selected="false">Squads</button><?php }?>
                <button class="nav-link" id="nav-swimmer-squads-tab" data-bs-toggle="tab" data-bs-target="#nav-swimmer-squads" type="button" role="tab" aria-controls="nav-swimmer-squads" aria-selected="false" >Swimmers Squad Assignment</button>
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

